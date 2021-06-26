import React, { Component } from 'react';
import ReactDom from 'react-dom';
import { BrowserRouter } from 'react-router-dom';

class App extends Component {
    render() {
        return (
            <BrowserRouter>
                <p>
                   This is React Compoonet
               </p>
            </BrowserRouter>
        )
    }
}

ReactDom.render(<App />, document.getElementById('root'));