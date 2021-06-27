// ModalContainer.js
import React, { Component } from 'react';
import Modal from 'react-modal';

class ModalContainer extends Component {
  state = {
    isModalOpen: false,
  };

  toggleModal = () => {
    this.setState({
      isModalOpen: !this.state.isModalOpen,
    });
  };

  render() {
    return (
      <div>
        <button onClick={this.toggleModal}>Upload Photo</button>
        <Modal
          isOpen={this.state.isModalOpen}
          onRequestClose={this.toggleModal}
        >
          {this.props.children}
        </Modal>
      </div>
    );
  }
}

export default ModalContainer;
