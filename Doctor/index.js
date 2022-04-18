var admin = require("firebase-admin");
const express = require('express')
const app = express()

var serviceAccount = require("./test-doctor-f3830-firebase-adminsdk-swnde-9a48109620.json");

admin.initializeApp({
    credential: admin.credential.cert(serviceAccount),
    databaseURL: "https://test-doctor-f3830-default-rtdb.firebaseio.com"
});

const message = {
    notification: {
        title: "New Message",
        body: "Hiii",
        imageUrl:'https://picsum.photos/200/300.jpg'
    },
    android: {
        notification: {
            image: 'https://picsum.photos/200/300.jpg',
        },
    },
    tokens: ['d4363F4HQR2eC_MUDj7oFM:APA91bH4wFjUduVeJ2yZqgO9QvE-o0F0suIOAoKuonuZg2Hhmw7xv5ITsv896EG1-W0vniml14IY5DYPou-36cVcMu2yWcqFpKzhLzM7uIT7TpLIfA6okdR_qUQzRMn7BBzxgw5VOZQG']
    // tokens: ['cU7Vk_LaTxmkGPmW6BAvot:APA91bG8JstD-Tp83T5JhxEU6-eGvqP33r9CQyi32rPXLJGR_13FhlbYITFtv16NwuKECfnwJ_XOatM7a4EXF_NmNNm0VY7N5cJp0PiQqNvS7RiODoaxSMQg3mwLPOIRfeGS9OD76dYR']
};

admin.messaging().sendMulticast(message).then(res => {
    console.log('send success', res)
}).catch(err => {
    console.log(err)
});


app.listen(3000, () => {
    console.log('surver running')
})