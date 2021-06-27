// ModalContainer.js
import React, { Component } from 'react';
import { useState, useEffect } from "react";
import "./App.css";

function ModalContainer() {
  const state = {
    isModalOpen: false,
  };
  const [loaded, setLoaded] = useState(false);
  const [data, setData] = useState([]);

  const postTweet = () =>{

  };
  
  useEffect(() => {
    // fetch("https://recruitment-mock-data.gjg-ads.io/data")
    fetch("http://localhost:8080/api/tweet_posts")
      .then((response) => response.json())
      .then((data) => {
        setData(data.data);
        setLoaded(true);
        alert(JSON.stringify(data.data));
        // alert(data);
      });
  }, []);

    return (
      <div>

        Simple Twitter on SPA 
        <button onClick={postTweet}>Tweet</button>
        <input
          className="search-input"
          type="text"
          onChange={(e) => postTweet(e.target.value)}
          placeholder="tweet"
        />
        {/* <Modal
          isOpen={state.isModalOpen}
          onRequestClose={toggleModal}
        >
        </Modal> */}
      </div>
    );
  
}

export default ModalContainer;
