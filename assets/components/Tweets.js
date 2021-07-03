// ModalContainer.js
import React, { Component } from 'react';
import { useState, useEffect } from "react";
import "./App.css";

function TweetsContainer() {
  const state = {
    isModalOpen: false,
  };
  const [loaded, setLoaded] = useState(false);
  const [error,  setError ] = useState(false);
  const [reloaded, setReloaded] = useState(false);
  const [form,setForm] = useState([]);
  const [id,setId]     = useState([]);
  const [tweetdata, setData] = useState([]);

  const postTweet = (tweet, id = null , type ="create") =>{
    const requestOptions = {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({
         "tweet_post": {
               tweet
        },
        "type" :{
               type
        },
        "id" :{
          id
       }
      })
     };
     fetch('http://52.69.185.201:8080/tweet/post2', requestOptions)
        .then(response => response.json())
        //.then(data => this.setState({ tweet: data.id }));
  };

  const deleteTweet = (tweet =null ,id , type ="delete") =>{
     alert("not implemented");
    // const requestOptions = {
    //   method: 'POST',
    //   headers: { 'Content-Type': 'application/json' },
    //     body: JSON.stringify({
    //       "tweet_post": {
    //             tweet
    //     },
    //     "type" :{
    //             type
    //     },
    //     "id" :{
    //       id
    //     }
    //     })
    //  };
    //  fetch('http://52.69.185.201:8080/tweet/post2', requestOptions)
    //     .then(response => response.json())
    //     //.then(data => this.setState({ tweet: data.id }));
  };
  
  useEffect(() => {
    // TODO catch error 
    // alert("useEffect");
    fetch("http://52.69.185.201:8080/api/tweetes4")
      .then((response) => response.json())
      .then((data) => {
      // alert(JSON.stringify(data)); //to debug
      setData(data);
      setLoaded(true);
      });
  }, [loaded,reloaded]);

  const handleChange =(e) => {
    // e.preventDefault();
    setForm(e.target.value);
  }

  const handleSubmit =(e) => {
    e.preventDefault();
    form.length == 0 ? alert("enter something") : "" ;
    form.length > 20 ?  setError("please tweet in 20 words") : postTweet(form)  ;
    setForm("");
    setReloaded(!reloaded);
    return;
  };

  const handleDelete =(e) => {
    e.preventDefault();
    deleteTweet(id);
    return;
  };

  const button = {
    padding: '10px 20px',
    border: 'none',
    borderRadius: '4px',
    background: '#1890ff',
    color: '#fff',
    fontSize: '14px',
    cursor: 'pointer',
    transition: '.3s background',
    '&:hover': {
      background: '#40a9ff'
    }
  };
  const button2= {
    padding: '10px 20px',
    border: 'none',
    borderRadius: '4px',
    background: '#008080',
    color: '#008080',
    fontSize: '5px',
    cursor: 'pointer',
    transition: '.3s background',
    '&:hover': {
      background: '#40a9ff'
    }
  };

  const ul_style = {
   // background: '#0dd212'
  }

  const padRight = (str, padchar, len) => {
    const padstr = padchar.repeat(len);
    return `${str}${padstr}`.slice(0, len);
  };

    return loaded ?  (
      <div className="wrapper" style={{color: '#0d1a26', fontWeight: 400}}> 
        Simple Twitter on SPA
        <form onSubmit={handleSubmit}>
          <input
            type="text"
            onChange={(e) => setForm(e.target.value)}
            // onChange={handleChange}
            placeholder="tweet (on spa)"
          />
           <input style={button} type="submit" value="Tweet(in 20words)" />
           <br></br>
           {error.length > 0 ? error : ''}
           <br></br>
        </form>
        Recent Tweet 
        <ul style={ul_style} >
        {tweetdata.length > 0 ? tweetdata.map(function(d, idx){
              return (
              　<li key={idx}>tweet{tweetdata.length - idx} is  {padRight(d.tweet,"+",20) } 
                       <form onSubmit={handleDelete}>
                         <input style={button2} onChange={(e) => setId(idx)} type="submit" value="delete" /> 
                       </form>
                </li>)
         }): "no data"}
         </ul>
        
      </div>
    ): (
      <h4 className="mt-5"> Tweet Loading...</h4>
    );;
  
}



export default TweetsContainer;
