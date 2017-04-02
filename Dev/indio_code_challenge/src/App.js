import React, { Component } from 'react';
import CreateContainer from './containers/Create.jsx';

class App extends Component {
  constructor(props) {
    super(props)
    console.log('hellooo')
  }
  render() {
    return (
      <div className="App">
        App

        <CreateContainer />
      </div>
    );
  }
}

export default App;
