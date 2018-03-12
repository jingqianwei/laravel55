import React from 'react';
import ReactDOM from 'react-dom';
import { Alert } from 'element-react';
import 'element-theme-default';//element-react 的主题包，必须得引用

const element = (
    <div>
        <Alert title="成功提示的文案" type="success" />
        <Alert title="消息提示的文案" type="info" />
        <Alert title="警告提示的文案" type="warning" />
        <Alert title="错误提示的文案" type="error" />
    </div>
);
// export default class Example extends Component {
//     render() {
//         return element
//     }
// }
//这里的Example就是下面的<Example />,而且必须是开头大写，也可以用import 引入一个react文件，用法都是一样的

if (document.getElementById('example')) {
    ReactDOM.render(element, document.getElementById('example'));
}
