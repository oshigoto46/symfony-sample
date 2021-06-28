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
  const [tweetdata, setData] = useState([]);

  const postTweet = (content) =>{
     
    const requestOptions = {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      // body:    { "tweet_post" : tweet }
      body: JSON.stringify({ "tweet_post": {
        content
      }}),
      // body: JSON.stringify({ tweet_post : tweet })
     };
     fetch('http://localhost:8080/tweet/post2', requestOptions)
        .then(response => response.json())
        //.then(data => this.setState({ tweet: data.id }));
  };
  
  useEffect(() => {
    //TODO catch error 
    fetch("http://localhost:8080/api/tweetes4")
    // fetch("https://recruitment-mock-data.gjg-ads.io/data")
      .then((response) => response.json())
      .then((data) => {
       alert("hoge");
       alert(JSON.stringify(data)); //to debug
      // setData(JSON.stringify(data)); == > map cant used (caz its already serialized)
      setData(data);
      setLoaded(true);
      });
  }, []);

  const handleSubmit =(e) => {
    e.preventDefault();
    setData(e.target.value);
  };

    return loaded ?  (
      <div>
        Simple Twitter on SPA
        <input
          className="search-input"
          type="text"
          onChange={(e) => handleSubmit(e)}
          placeholder="tweet (on spa)"
        />
       
        <button onClick={postTweet(tweetdata)}>Tweet</button>
        {/* {tweetdata.map(function(d, idx){
              return (<li key={idx}>tweet{idx} is {d.tweet}</li>)
         })} */}
      </div>
    ): (
      <h4 className="mt-5"> Tweet Loading...</h4>
    );;
  
}



export default TweetsContainer;
