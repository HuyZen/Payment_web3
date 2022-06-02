// $(document).ready(function(){

//    // import { useWeb3React } from "@web3-react/core"

 
//     var currentAccount = "";
     
//     checkMM();
 
 
//     $("#connectMM").click(function(){
//        connectMM().then((data)=>{
//           currentAccount = data[0];
//           console.log(currentAccount); 
//        }).catch((err)=>{
//           console.log(err);
//        });
//     });
//  });
 
//  async function connectMM(){
//     const accounts = await ethereum.request({ method: 'eth_requestAccounts' });
//     return accounts;
//  }
 
//  function checkMM(){
//     if (typeof window.ethereum !== 'undefined') {
//        console.log('MetaMask is installed!');
//      }else{
//         console.log('Ban chua cai Metamask!!!')
//      }
//   }





window.onload = function(){
   if(window.ethereum !== "undefined") {
      this.ethereum.on("accountsChanged", handleAccountsChanged)

      window.ethereum.request({method: "eth_accounts"})
      .then(handleAccountsChanged)
      .catch((err)=>{
         console.log(err)
      })

   } 
}

let accounts;

const handleAccountsChanged = (accounts) =>{
   console.log("accounts changed")
   accounts = a
}

// async function connectWallet() {
//    accounts = await window.ethereum.request({ method: 'eth_requestAccounts' }).catch((err)=>{
//       console.log(err.code)
//    })

//    console.log(accounts)
// }

async function Payment(){

   let params = [{
      "from": "0x9CCdF14384A33ADe354379Be233E6dcdB261e162",
      "to": "0xc3f9CCA91C2c866e15E643d6F9AdC6431262082D",
      "gas": Number(21000).toString(16),
      "gasPrice": Number(2500000).toString(16),
      "value": Number(1200000000000000000).toString(16),
   }]
   

    let result =  window.ethereum.request({method: "eth_sendTransaction", params}).catch((err)=>{
         console.log(err)
      })
      
}





const ethereumButton = document.querySelector('.enableEthereumButton');
const showAccount = document.querySelector('.showAccount');
if(ethereumButton){
ethereumButton.addEventListener('click', () =>  {
      getAccount();
});
}
async function getAccount() {
  const accounts = await ethereum.request({ method: 'eth_requestAccounts' });
  const account = accounts[0];
  showAccount.innerHTML = account;
}







