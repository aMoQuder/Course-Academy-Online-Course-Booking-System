require('./bootstrap');
// resources/js/app.js
// resources/js/app.js

import Echo from 'laravel-echo';

window.io = require('socket.io-client');

const echo = new Echo({
    broadcaster: 'socket.io',
    host: window.location.hostname + ':6001' // استبدل بمضيف Socket.io الخاص بك
});

echo.channel('admin-notifications')
    .listen('.book-course-submitted', (data) => {
        console.log('New course booked: ', data);
        // يمكنك هنا إضافة رمز لعرض الإشعار للإدمن، مثلاً استخدام مكتبة خاصة بالإشعارات
    });