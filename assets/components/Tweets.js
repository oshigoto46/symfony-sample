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

  const postTweet = () =>{

  };
  
  useEffect(() => {
    fetch("http://localhost:8080/api/tweetes")
      .then((response) => response.json())
      .then((data) => {
        alert(JSON.stringify(data));
        setData(JSON.stringify(data));
        setLoaded(true);
      });
  }, []);

    return loaded ?  (
      <div>
        Simple Twitter on SPA
        <input
          className="search-input"
          type="text"
          onChange={(e) => postTweet(e.target.value)}
          placeholder="tweet (on spa)"
        />
       
        {/* {data.map((d) => {<div> d.title </div>})} */}
        <button onClick={postTweet}>Tweet</button>
        <ListItem> <li> tweet data -> {tweetdata} </li> </ListItem>
      </div>
    ): (
      <h1 className="mt-5"> Tweet Loading...</h1>
    );;
  
}



export default TweetsContainer;
