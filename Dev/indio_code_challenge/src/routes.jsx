import App from './App.js';
import Create from './containers/Create.jsx';
import React from 'react';

import {
  Route
} from 'react-router'

export default (
    <Route component={App}>
      <Route path="/create" component={Create} />
    </Route>
  )
