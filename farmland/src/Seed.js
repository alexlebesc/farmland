import React, { Component } from 'react';

class Seed extends Component {
  constructor(props) {
    super(props);
    this.name = props.name;
  }
  render() {
    return (
      <div class="card">
        <header class="card-header">
          <p class="card-header-title">
            {this.name}
          </p>
        </header>
        <div class="card-content">
          <div class="content">
            {this.description}
          </div>
        </div>
      </div>
    );
  }
}

export default Seed;
