import React, { Component } from 'react';
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
          <li><a href='https://namu.wiki/w/Kendrick%20Lamar'>Kendrick</a></li>
          <li><a href='https://namu.wiki/w/Drake'>Drake</a></li>
          <li><a href='https://namu.wiki/w/%ED%83%80%EC%9D%BC%EB%9F%AC%2C%20%EB%8D%94%20%ED%81%AC%EB%A6%AC%EC%97%90%EC%9D%B4%ED%84%B0?from=Tyler,%20The%20Creator'>Tyler</a></li>
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
    mode:'tyler',  
    welcome:{title:'Welcome', sub:'Welcome to React Tessting'},
    subject:{title:'REACT.JS', sub:'React.JS Testing Website'},
    contents:[
      {id:1, title:'Kendrick', sub:'Kendrick Lamar Duckworth'},
      {id:2, title:'Drake', sub:'Drizzy'},
      {id:3, title:'Tyler', sub: 'Tyler The Creator'}
    ]
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
    }
    return (
    <div className="App">
      <header>
      <h1><a href='/' onClick={function(e){
        console.log(e)
        e.preventDefault();   //누를때마다 리로드 되는것을 방지함
        //this.state.mode = 'welcome'  라고 하면 바뀌었다고 인식하지 못함
        this.setState({
          mode:'welcome'
        })
      }.bind(this)}>{this.state.subject.title}</a></h1>
      {this.state.subject.sub}
    </header>
      <Table></Table>
      <Content title={_title} desc={_sub}></Content>
    </div>
    );
  }
}

export default App;