// require("dotenv-safe").load()
require("dotenv-safe").config()
const MercadoBitcoin = require("./api").MercadoBitcoin
var infoApi = new MercadoBitcoin({ currency: 'LTC' })

setInterval(() => 
   infoApi.ticker((tick) => console.log(tick.ticker)),
   process.env.CRAWLER_INTERVAL
)