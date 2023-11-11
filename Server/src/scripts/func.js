// const accountId = document.getElementById('account_id');
// accountId.addEventListener('click',function (){
//     // console.log("dfds");
//     const account_id = document.querySelector('#idd').value;
//     const account = document.querySelector('#account');
//     const username = document.querySelector('#username').value;
//     // account_id.innerHTML = account_id;
//     account.innerHTML = username+account_id;
//     account.value = username+account_id;
//     console.log(account.value);
// });
//edit md //

const accountId = document.getElementById('username_id'); 
accountId.addEventListener('click',function (){
    // console.log("dfds");
    const account_id = document.querySelector('#idd').value;
    const account = document.querySelector('#account').value;
    // const username = document.querySelector('#username').value;
    // account_id.innerHTML = account_id;
    // account.innerHTML = username+account_id;
    //  account.innerHTML = account+account_id;
    faccount = account+account_id;
    document.querySelector("#account").value=faccount;
    // console.log(faccount);
});
// end ///
