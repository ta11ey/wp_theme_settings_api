import React, { PropTypes, Component } from 'react';
import { removeInput } from '../../actions/create.js'
import { connect } from 'react-redux';

 /** return primary information section (icon, title, location) of ob feed card.
 */
 export class ParentInput extends Component {
   static propTypes = {}

   constructor(props) {
     super(props)
   }

   remove = () => {
     const{ dispatch, id } = this.props;

     dispatch(removeInput(id))
   }
   render() {
     const { data, id } = this.props;

     const styles = {
       container: {
         height: 96,
         width: 400,
         background: '#f3f4f4'
       }
     }
     return (
       <div style={styles.container}>
         <div onClick={this.remove}>
           X
         </div>
         Parent input { id }
       </div>
       )
   }
 }

 export default connect()(ParentInput)
