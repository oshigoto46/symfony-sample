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
    //TODO catch error 
    fetch("http://localhost:8080/api/tweetes")
      .then((response) => response.json())
      .then((data) => {
      alert(JSON.stringify(data)); //to debug
       // setData(JSON.stringify(data)); == > map cant used (caz its already serialized)
       setData(data);
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
        {tweetdata.map(function(d, idx){
              return (<li key={idx}>{d.description}</li>)
         })}
      </div>
    ): (
      <h4 className="mt-5"> Tweet Loading...</h4>
    );;
  
}



export default TweetsContainer;
