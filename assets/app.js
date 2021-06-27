import React, { Component } from 'react';
import ReactDom from 'react-dom';
import { BrowserRouter } from 'react-router-dom';
import  Header  from './components/Header';
import ModalContainer from './components/ModalContainer';

// import Home from "./components/Home";

class App extends Component {
    render() {
        return (
            <BrowserRouter>
                {/* <Header></Header> */}
                <ModalContainer></ModalContainer>
            </BrowserRouter>
        )
    }
}

ReactDom.render(<App />, document.getElementById('root'));