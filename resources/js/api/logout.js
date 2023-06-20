import {API_HOST} from "../const.js";

export default async (token,onSuccess,onError) => {
    const url = API_HOST + '/api/auth/logout'
    const data = {};
    const config =  { headers:{'Content-Type': 'application/json', 'Authorization': 'Bearer ' + token}}
    await axios.post(url,data,config).then((response) => {
        if(response.status === 200){ onSuccess(response)}
    }).catch((err) => { onError(err)})
}
