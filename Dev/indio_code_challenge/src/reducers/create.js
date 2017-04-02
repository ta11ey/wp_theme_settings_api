import { createSymbols } from '../actions/create.js'

const defaultState = {

}

export default (state = defaultState, action) => {
  switch(action.type) {
    case createSybols.test:
     return {
       ...state,
       test: 'helloWorld'
     }
    default:
      return state
  }
}
