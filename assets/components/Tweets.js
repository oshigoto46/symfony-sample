// ModalContainer.js
import React, { Component } from 'react';
import { useState, useEffect } from "react";
import { ListItem } from '@material-ui/core';
import "./App.css";

function TweetsContainer() {
  const state = {
    isModalOpen: false,
  };
  const [loaded, setLoaded] = useState(false);
  const [reloaded, setReloaded] = useState(false);
  const [form,setForm] = useState(false);
  const [tweetdata, setData] = useState([]);

  const postTweet = (tweet) =>{
     
    const requestOptions = {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ "tweet_post": {
        tweet
      }})
     };
     fetch('http://localhost:8080/tweet/post2', requestOptions)
        .then(response => response.json())
        //.then(data => this.setState({ tweet: data.id }));
  };
  
  useEffect(() => {
    // TODO catch error 
    // alert("useEffect");
    fetch("http://localhost:8080/api/tweetes4")
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
    postTweet(form);
    setForm("");
    setReloaded(!reloaded);
  };

    return loaded ?  (
      <div>
        Simple Twitter on SPA
        <form onSubmit={handleSubmit}>
          <input
            type="text"
            onChange={(e) => setForm(e.target.value)}
            // onChange={handleChange}
            placeholder="tweet (on spa)"
          />
           <input type="submit" value="Tweet" />
         
        </form>
        {tweetdata.length > 0 ? tweetdata.map(function(d, idx){
              return (<li key={idx}>tweet{idx} is {d.tweet}</li>)
         }): "no data"}
      </div>
    ): (
      <h4 className="mt-5"> Tweet Loading...</h4>
    );;
  
}



export default TweetsContainer;
