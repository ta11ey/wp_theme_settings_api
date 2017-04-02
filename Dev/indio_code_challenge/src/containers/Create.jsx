import React, { PropTypes, Component } from 'react';
import {connect} from 'react-redux'

 /** return primary information section (icon, title, location) of ob feed card.
 */

 export class Create extends Component {
   static propTypes = {

   }

   constructor(props) {
     super(props)
     console.log(props.create)
   }

   render() {

     return (
       <div >
         createContainer
         {this.props.children}
       </div>
       )
   }
 }

 const mapStateToProps = state => (
   {
     create: state.create
   }
 )

export default connect(mapStateToProps)(Create)
