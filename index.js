// require("dotenv-safe").load()
require("dotenv-safe").config()
const MercadoBitcoinDados = require("./api").MercadoBitcoinDados
var infoApi = new MercadoBitcoinDados({ currency: 'BTC' })

setInterval(() => 
   infoApi.ticker((tick) => console.log(tick.ticker)),
   process.env.CRAWLER_INTERVAL
)