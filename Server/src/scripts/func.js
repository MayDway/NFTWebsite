const accountId = document.getElementById('account_id');
accountId.addEventListener('click',function (){
    // console.log("dfds");
    const account_id = document.querySelector('#idd').value;
    const account = document.querySelector('#account');
    const username = document.querySelector('#username').value;
    // account_id.innerHTML = account_id;
    account.innerHTML = username+account_id;
    account.value = username+account_id;
    console.log(account.value);
});