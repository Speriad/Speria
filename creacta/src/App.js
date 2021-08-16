import React, { Component } from 'react';
import './App.css';

class Subject extends Component {
  render(){
    return (
    <header>
      <h1>{this.props.title}</h1>
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
          <li><a href='https://html.speriateam.repl.co/'>Kendrick</a></li>
          <li><a href='https://html.speriateam.repl.co/'>Drake</a></li>
          <li><a href='https://html.speriateam.repl.co/'>Tyler</a></li>
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
    subject:{title:'This is test of React.js', sub:'React.js was made by FaceBook'},
    subject2:{title: 'This is Second example', sub:'Hello World'},
    subject3: {title: 'JavaScript', sub: 'JavaScript is Programming Language'}
    }
  }
  render(){
    return (
    <div className="App">
      <Subject title={this.state.subject.title} sub={this.state.subject.sub}></Subject>
      <Subject title={this.state.subject2.title} sub={this.state.subject2.sub}></Subject>
      <Table></Table>
      <Content title={this.state.subject3.title} desc={this.state.subject3.sub}></Content>
    </div>
    );
  }
}

export default App;