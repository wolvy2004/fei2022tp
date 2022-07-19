import axios from "axios";

axios.defaults.baseURL = "http://127.0.0.1:8000/ap1v1";

const custom_axios = axios;

export default custom_axios;