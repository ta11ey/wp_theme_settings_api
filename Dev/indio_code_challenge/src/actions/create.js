import { unique_id } from '../helpers/create.js';

export const createSymbols = {
  addInput: Symbol('ADD_INPUT'),
  removeInput: Symbol('REMOVE_INPUT')
}

export const addInput = () => {
  const input = {
    question: '',
    type: '',
    response: {},
    children: [],
    created_at: Date.now()
  }

  return {
    type: createSymbols.addInput,
    input,
    id: unique_id()
  }
}

export const removeInput = (id) => {
  return {
    type: createSymbols.removeInput,
    id
  }
}
