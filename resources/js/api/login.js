import {API_HOST} from "../const.js";

export default async (email,password,onSuccess,onError) => {
    const url = API_HOST + '/api/auth/login'
    const data = {email:email, password:password}
    const config =  {headers:{'Content-Type': 'application/json'}}
    await axios.post(url,data,config).then((response) => {
        if(response.status === 200){ onSuccess(response)}
    }).catch((err) => { onError(err)})
}
