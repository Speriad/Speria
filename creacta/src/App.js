import React, { Component } from 'react';
import Control from './Control.js'
import './App.css';


class Subject extends Component {
  render(){
    return (
    <header>
      <h1><a href='/'>{this.props.title}</a></h1>
      {this.props.sub}
    </header>
    );
  }
}

class Table extends Component {
  render(){
    return (
    <nav>
      <ul>
          <div id='table1'><li>{this.state.table1.title}</li></div>
          <div id='table2'><li>{this.state.table2.title}</li></div>
          <div id='table3'><li>{this.state.table3.title}</li></div>
      </ul>
    </nav>
    );
  }
}

class Content extends Component {
  render(){
    return (
    <article>
      <h2>{this.props.title}</h2>
      {this.props.desc}
    </article>
    );
  }
}

//props로 전달, this.state로 한번더 전달, 쉼표빼먹지 말것.

class App extends Component {
  constructor(props){   //props 초기화
    super(props);
  this.state={     
    mode: null,  
    welcome:{title:'Welcome', sub:'Welcome to React Tessting'},
    subject:{title:'REACT.JS', sub:'React.JS Testing Website'},
    contents:[
      {id:1, title:'Kendrick', sub:'Kendrick Lamar Duckworth is GOAT'},
      {id:2, title:'Drake', sub:'Drizzy is his nickname.'},
      {id:3, title:'Tyler', sub: 'CALL ME IF YOU GET LOST is one of the hottest albums in 2021🔥'},
      {id:4, title: 'React', sub: 'React.js was made by FaceBook'}
    ],
    table1:{title:'Kendrick'},
    table2:{title:'Drake'},
    table3:{title:'Tyler'},
    }
  }
  render(){
    var _title, _sub = null;
    if(this.state.mode ==='welcome'){
      _title = this.state.welcome.title
      _sub = this.state.welcome.sub
    }else if(this.state.mode ==='kendrick'){
        _title = this.state.contents[0].title;
        _sub = this.state.contents[0].sub;
    }else if(this.state.mode ==='drake'){
      _title = this.state.contents[1].title
      _sub = this.state.contents[1].sub
    }else if(this.state.mode === 'tyler'){
      _title = this.state.contents[2].title
      _sub = this.state.contents[2].sub
    }else if(this.state.mode == 'react'){
      _title = this.state.contents[3].title
      _sub = this.state.contents[3].sub
    }
    return (
    <div className="App">
      <header>
      <h1><a href='/' onClick={function(e){
        e.preventDefault();
        this.setState({
          mode: 'react'
        })
      }.bind(this)}>{this.state.subject.title}</a></h1>
      {this.state.subject.sub}
    </header>
        <a href='/' onClick={function(e){
        e.preventDefault();   //누를때마다 리로드 되는것을 방지함
        //this.state.mode = 'welcome'  라고 하면 바뀌었다고 인식하지 못함
        this.setState({
          mode:'kendrick'
        })
      }.bind(this)}><br /><li>{this.state.table1.title}</li></a>
      
      
      <a href='/' onClick={function(e){
        e.preventDefault();  
        this.setState({
          mode:'drake'
        })
      }.bind(this)}><li>{this.state.table2.title}</li></a>
      
      
      <a href='/' onClick={function(e){
        e.preventDefault(); 
        this.setState({
          mode:'tyler'
        })
      }.bind(this)}><li>{this.state.table3.title}</li></a>
      <Control onChangeMode={function(_mode){
        this.setState({
          mode:_mode
        })
      }.bind(this)}></Control>
      <Content title={_title} desc={_sub}></Content>
    </div>
    );
  }
}

export default App;