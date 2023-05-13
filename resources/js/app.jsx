import './bootstrap';
import React from 'react';
import ReactDOM from 'react-dom';
// import  createRoot  from 'react-dom/client';

import MyApp from './component/MyApp';
import AppTwo from './component/AppTwo';
import { BrowserRouter , Routes , Route } from 'react-router-dom';
if (document.getElementById('app')) {
    ReactDOM.render(
        <BrowserRouter>
            <Routes>
                <Route path='/Caisse' element={<MyApp />} />
                <Route path='/Caisse/bl' element={<AppTwo />} />
            </Routes>
        </BrowserRouter>
    , 
    document.getElementById('app'));
}