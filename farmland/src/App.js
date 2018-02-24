import React, { Component } from 'react';
import data from './data.json';
import Seed from './Seed.js';
import './App.css';

class App extends Component {
  constructor() {
    super();
    this.farm = data.filter(function(farm) {
      return parseInt(farm.year) === 2017;
    }).shift();
  }
  render() {
    return (
      <div class="container">
          <h1 class="title is-1">Farmland 2017</h1>

          <h2 class="title is-2">Les semences</h2>
          <div class="columns is-multiline">
              {
                this.farm.seeds.map(function(seed){
                  return (
                    <div class="column is-one-quarter">
                      <Seed name={seed}/>
                    </div>
                  );
                })
              }
          </div>


          <div class="content">
            <h2 class="title is-2">Parcelles</h2>
            <ul>
              {
                this.farm.beds.map(function(bed){
                    return <li>{bed}</li>;
                })
              }
            </ul>

            <p>préparation du sol en biodynamique. Double tranchée.</p>
          </div>

          <div class="content">
            <h2 class="title is-2">Le bac à compost</h2>
            <h3 class="title is-3">Construction</h3>
          </div>

          <div class="content">
            <h2 class="title is-2">Le bac à terreau</h2>
          </div>

          <div class="content">
            <h2 class="title is-2">Les outils</h2>
            <p>Le bac à semi avec son couvercle : permet de semer une grande quantité de graine de façon ordonnée grâce à son couvercle</p>
          </div>

          <div class="content">
            <p>
            Quelles sont les plantes que je vais planter cette année ?
            Quelles sont les parcelles à disposition pour le potager ?
            </p>
          </div>
      </div>
    );
  }
}

export default App;
