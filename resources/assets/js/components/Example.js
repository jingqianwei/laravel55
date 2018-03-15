import React from 'react';
import ReactDOM from 'react-dom';
import { Alert } from 'element-react';
import 'element-theme-default';//element-react 的主题包，必须得引用
import TableContent  from './page/TableContent';
import CheckboxContent from './page/CheckboxContent';

//这个例子 函数，变量，类一起都使用了
function Welcome(props) {
    return <h1>Hello, {props.name}</h1>;
}

let element = (
    <div>
        <Alert title="成功提示的文案" type="success" />
        <Alert title="消息提示的文案" type="info" />
        <Alert title="警告提示的文案" type="warning" />
        <Alert title="错误提示的文案" type="error" />
        <Welcome name="Sara" />
        <Welcome name="Cahal" />
        <Welcome name="Edite" />
    </div>
);

class Toggle extends React.Component {
    constructor(props) {
        super(props);
        this.state = {isToggleOn: true};

        // This binding is necessary to make `this` work in the callback
        this.handleClick = this.handleClick.bind(this);
    }

    handleClick() {
        this.setState(prevState => ({
            isToggleOn: !prevState.isToggleOn
        }));
    }

    render() {
        return (
            <div>
                <CheckboxContent />
                <TableContent />
                {element}
                <div>
                    <button onClick={this.handleClick}>
                        {this.state.isToggleOn ? 'ON' : 'OFF'}
                    </button>
                </div>
            </div>
        );
    }
}

//这里的Example就是下面的<Example />,而且必须是开头大写，也可以用import 引入一个react文件，用法都是一样的

if (document.getElementById('example')) {
    ReactDOM.render(
        <Toggle />,
        document.getElementById('example')
    );
    //ReactDOM.render(<Toggle />, document.getElementById('example'));
    //或者如下
    //ReactDOM.render(<Example />, document.getElementById('example'));
}
