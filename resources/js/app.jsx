import './bootstrap';
import React from 'react';
import ReactDOM from 'react-dom';
// import  createRoot  from 'react-dom/client';
import MyApp from './component/MyApp';
if (document.getElementById('app')) {
    ReactDOM.render(<MyApp />, document.getElementById('app'));
    // ReactDOM.createRoot(document.getElementById('app')).render(
    //     <MyApp />
    // );
}