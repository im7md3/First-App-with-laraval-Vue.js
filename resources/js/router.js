

import firstPage from './components/pages/firstPage' 
 import home from './components/pages/home'
import about from './components/pages/about' 
import contact from './components/pages/contact'

export default {
    mode: 'history',
    routes: [
        {path:'/blog/public',component:home},
        {path:'/blog/public/about',component:about},
        {path:'/blog/public/contact',component:contact},
        {path:'/first',component:firstPage},
    ]
}
