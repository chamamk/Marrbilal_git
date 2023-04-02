import './bootstrap';
import React from 'react';
import ReactDOM from 'react-dom';
import MyApp from './component/MyApp';
if (document.getElementById('app')) {
    ReactDOM.render(<MyApp />, document.getElementById('app'));
}