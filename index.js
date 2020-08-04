// require("dotenv-safe").load()
require("dotenv-safe").config();
const MercadoBitcoinDados = require("./api").MercadoBitcoinDados
const MercadoBitcoinTrade = require("./api").MercadoBitcoinTrade
var infoApi = new MercadoBitcoinDados({ currency: process.env.COIN});
var tradeApi = new MercadoBitcoinTrade({ 
   currency: process.env.COIN, 
   key: process.env.KEY, 
   secret: process.env.SECRET, 
   pin: process.env.PIN 
});

// code Lucas
function getBalance(coin){
   coin = coin.toLowerCase();
   var balance
   tradeApi.getAccountInfo((response_data) => {
      balance = parseFloat(response_data.balance[coin].available).toFixed(5);   
      balance = parseFloat(balance);
      // console.log(balance);
   },
   (data) => console.log(data));
}

var saldo = getBalance(process.env.COIN);
console.log('o saldo em '+process.env.COIN+' é: '+saldo);
// setInterval(() => 
//    getBalance('BCH');
//    process.env.CRAWLER_INTERVAL
// )

// code da net
function getQuantity(coin, price, isBuy, callback){
   price = parseFloat(price);
   coin = isBuy ? 'brl' : coin.toLowerCase();

   tradeApi.getAccountInfo((response_data) => {
      var saldo = parseFloat(response_data.balance[coin].available).toFixed(5);   
      saldo = parseFloat(saldo);

      console.log('saldo em '+coin+': '+saldo);
      // if(isBuy && balance < 50){
      //    return console.log('Sem saldo disponível para comprar!'); 
      // }else{
      //    console.log(`Saldo disponível de ${coin}: ${balance}`);
      // }

      // if(isBuy) balance = parseFloat((balance / price).toFixed(5))
      //    callback(parseFloat(balance) - 0.00001)//tira a diferença que se ganha no arredondamento
   },
   (data) => console.log(data));
}

// setInterval(() => 
//    infoApi.ticker((tick) => console.log(tick.ticker)),
//    process.env.CRAWLER_INTERVAL
// )

// setInterval(() => 
//    infoApi.ticker((response) => {
//       console.log(response.ticker);
//       if(response.ticker.last >= 1340){
//          getQuantity(process.env.COIN, response.ticker.sell, true, (qty) =>{
//             tradeApi.placeBuyOrder(qty, response.ticker.sell, 
//                (data) => {
//                   console.log('Ordem de compra inserida no livro. '+data);
//                   //operando em STOP
//                   tradeApi.placeSellOrder(data.quantity, response.ticker.sell * parseFloat())
//                });
//          });
//          // tradeApi.placeSellOrder(0.001, 1.35,
//          //    (data) => console.log('Ordem de venda inserida no livro. ' + data),
//          //    (data) => console.log('Erro ao inserir ordem de venda no livro. ' + data))
//       }
//       else{
//          console.log('Abaixo do valor esperado.');
//       }
//    }),
//    process.env.CRAWLER_INTERVAL
// );