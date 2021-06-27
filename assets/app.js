import React, { Component } from 'react';
import ReactDom from 'react-dom';
import { BrowserRouter } from 'react-router-dom';
import TweetsContainer from './components/Tweets';

// import Home from "./components/Home";

class App extends Component {
    render() {
        return (
            <BrowserRouter>
                <TweetsContainer></TweetsContainer>
            </BrowserRouter>
        )
    }
}

ReactDom.render(<App />, document.getElementById('root'));