// ModalContainer.js
import React, { Component } from 'react';
import { useState, useEffect } from "react";
import Modal from 'react-modal';

function ModalContainer() {
  const state = {
    isModalOpen: false,
  };
  const [loaded, setLoaded] = useState(false);
  const [data, setData] = useState([]);

  const toggleModal = () => {
    this.setState({
      isModalOpen: ! state.isModalOpen,
    });
  };

  const postTweet = () =>{

  };
  
  useEffect(() => {
    fetch("https://recruitment-mock-data.gjg-ads.io/data")
      .then((response) => response.json())
      .then((data) => {
        setData(data.data);
        setLoaded(true);
        alert(data);
      });
  }, []);

    return (
      <div>

        Simple Twitter on SPA 
        <button onClick={toggleModal}>Tweet</button>
        {/* <Modal
          isOpen={state.isModalOpen}
          onRequestClose={toggleModal}
        >
        </Modal> */}
      </div>
    );
  
}

export default ModalContainer;
