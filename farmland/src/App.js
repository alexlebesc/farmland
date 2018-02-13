import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';

function bed(id) {
  return (
    <div>
    <p>BED {id}</p>
    <svg width="50%" height="200" id="bed_{id}">
      <rect width="100%" height="200" x="50" y="20" fill="green"/>
    </svg>
    </div>
  );
}

class App extends Component {
  render() {
    return (
      <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <h1 className="App-title">Welcome to React</h1>
        </header>
          {bed(1)}
          {bed(2)}
          {bed(3)}
      </div>
    );
  }
}

export default App;
