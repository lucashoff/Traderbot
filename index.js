require("dotenv-safe").config();
const MercadoBitcoinDados = require("./api").MercadoBitcoinDados
const MercadoBitcoinTrade = require("./api").MercadoBitcoinTrade
const Coin = process.env.COIN;
const Profit = process.env.PROFIT;
const Interval = process.env.CRAWLER_INTERVAL;
var infoApi = new MercadoBitcoinDados({ currency: process.env.COIN});
var tradeApi = new MercadoBitcoinTrade({
   currency: process.env.COIN,
   key: process.env.KEY,
   secret: process.env.SECRET,
   pin: process.env.PIN
});

// Functions
function getQuantity(coin, price, isBuy, callback){
    //pega preço e atribui ao "coin" Reais caso for operação de compra
    price = parseFloat(price);
    coin = isBuy ? 'brl' : coin.toLowerCase();
 
    tradeApi.getAccountInfo((response_data) => {
        // busca saldo da criptomoeda ou em reais na conta
        var balance = parseFloat(response_data.balance[coin].available).toFixed(5);
        balance = parseFloat(balance);
        //verifica se tem no mínimo R$ 10,00 de saldo para compra
        if(isBuy && balance < 10) return console.log('Saldo insuficiente para comprar!');
        console.log(`Saldo disponível de ${coin}: ${balance}`);
        // caso for compra, divide-se o saldo em reais pelo preço da moeda para definir a quantidade de compra
        if(isBuy) balance = parseFloat((balance / price).toFixed(5));
        callback(parseFloat(balance) - 0.00001);//tira a diferença que se ganha no arredondamento
    }, 
    (data) => console.log(data))
}

setInterval(() => 
    infoApi.ticker((response) => {
        console.log(response.ticker);
        // verifica o valor de venda da criptomoeda
        if(response.ticker.sell <= 90000){
            // busca saldo em reais para compra
            getQuantity('BRL', response.ticker.sell, true, (qty) => {
                //cria ordem de compra
                tradeApi.placeBuyOrder(qty, response.ticker.sell, 
                    (data) => {
                        console.table('Ordem de compra inserida no livro. ' + data.order)

                        setTimeout(() =>
                            //operando em STOP
                            tradeApi.placeSellOrder((parseFloat(data.order.quantity - data.order.fee).toFixed(5) - 0.00001), parseFloat(response.ticker.sell * parseFloat(Profit)).toFixed(5), 
                                (data) => console.log('Ordem de venda inserida no livro. ' + data),
                                (data) => console.log('Erro ao inserir ordem de venda no livro. ' + data)),
                                2000)
                    },
                    (data) => console.table('Erro ao inserir ordem de compra no livro. ' + data))
            })
        }
    }),
   process.env.CRAWLER_INTERVAL
)