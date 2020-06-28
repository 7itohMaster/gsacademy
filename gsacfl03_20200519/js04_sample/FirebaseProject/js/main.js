'use strict';

  const firebaseConfig = {
    apiKey: "AIzaSyAHyCyjN7a1eppx_YgR9uCCtows0iZyRGU",
    authDomain: "chatapptask-55bf7.firebaseapp.com",
    databaseURL: "https://chatapptask-55bf7.firebaseio.com",
    projectId: "chatapptask-55bf7",
    storageBucket: "chatapptask-55bf7.appspot.com",
    messagingSenderId: "823950939473",
    appId: "1:823950939473:web:c5ef22b8d7665a6155ef70",
    measurementId: "G-XSTNQT0WKC"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

  const db = firebase.firestore();
  const collection = db.collection('messages');

  //認証
  const auth = firebase.auth();

  const message = document.getElementById('message');
  const messages = document.getElementById('messages');
  const form = document.querySelector('form');

  //login logout
  const login = document.getElementById('login');
  const logout = document.getElementById('logout');

  login.addEventListener('click', () => {
    auth.signInAnonymously();
  });

  logout.addEventListener('click', ()=> {
    auth.signOut();
  });

  auth.onAuthStateChanged(user => {
    if (user) {
      collection.orderBy('created').onSnapshot(snapshot => {
        snapshot.docChanges().forEach(change => {
          if (change.type === 'added') {
            const li = document.createElement('li');
            li.textContent = change.doc.data().message;
            messages.appendChild(li);
          }
        });
  });

  console.log(`logged in as: ${user.uid}`);
  login.classList.add('hidden');
  [logout, form, messages].forEach(el => {
      el.classList.remove('hidden');
  });

  message.focus();
  return;
  }
    console.log('Nobady is logged in');
    login.classList.remove('hidden');
    [logout, form, messages].forEach(el => {
      el.classList.add('hidden');
  });
});

  form.addEventListener('submit', e =>{
    e.preventDefault();

    const val = message.value.trim();
    if(val === ""){
      return;
    }

    message.value ='';
    message.focus();

    //データ保存
    collection.add({
      // message: message.value,
      message: val,
      created: firebase.firestore.FieldValue.serverTimestamp()
    })
    // 処理OK
    .then(doc => {
      console.log(`${doc.id} added!`);
    })
    // 処理NG
    .catch(error => {
      console.log(error);
    });
  });

