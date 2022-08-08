import { createApp } from "vue";
import Applic from "./Applic";
import Product from "./Product";
import '../../public/css/style.css';


const app = createApp({
});
app.component("applic", Applic);
app.component("product", Product);

app.mount("#app");
