import http from '../http';

export default {
    template:{
        async choices(params){
            return await http.get('/minicart/template/choices',{params:params})
        },
    },
    templateOptions:{
        async update(params){
            return await http.post('/minicart/template/options/update',params)
        },
    },
    product:{
        async detail(params){
            return  await http.get('/minicart/product/detail',{params:params})
        },
        async name(params){
            return  await http.get('/minicart/product/name',{params:params})
        },
        async choices(params){
            return  await http.get('/minicart/product/choices',{params:params})
        },
    },
    basics:{
        async update(params){
            return await http.post('/minicart/basics/update',params)
        },
        async updateWholeTab(params){
            return await http.post('/minicart/basics/batch/update',params)
        }
    },
    site:{
        async create(params){
            return await http.post('/minicart/site/create',params)
        },
        async upgrade(params){
            return await http.post('/minicart/deployment/upgrade',params)
        },
    },
    configs:{
        async all(params){
            return await http.get('/minicart/configs/all',{params:params})
        },
    },
    promotion:{ // 优惠文案
        async update(params){
            return await http.post('/minicart/promotion/update',params)
        }
    },
    discounts:{ // 满减规则
        async update(params){
            return await http.post('/minicart/discounts/update',params)
        }
    },
    specifications:{
        async update(params){
            return await http.post('/minicart/specifications/update',params)
        }
    },
    carousels: {
        async list(params){
            let latest = await http.post('/minicart/carousels/list',params)
            return Promise.resolve(latest)
        },
        async update(params){
            let latest = await http.post('/minicart/carousels/update',params)
            return Promise.resolve(latest)
        }
    },

    logo: {
        async update(params){
            let latest = await http.post('/minicart/logo/update',params)
            return Promise.resolve(latest)
        }
    },
    watermarkOptions: {
        async update(params){
            let latest = await http.post('/minicart/watermarkoptions/update',params)
            return Promise.resolve(latest)
        },
    },
    recommendations:{
        async update(params){
            let latest = await http.post('/minicart/recommendations/update',params)
            return Promise.resolve(latest)
        },
    },
    descriptions: {
        async update(params){
            let latest = await http.post('/minicart/descriptions/update',params)
            return Promise.resolve(latest)
        },
    },
    comments:{
        async update(params){
            let latest = await http.post('/minicart/comments/update',params)
            return Promise.resolve(latest)
        },
    },
    comment:{
        images:{
            async remove(params){
                let latest = await http.post('/minicart/comment/images/remove',params)
                return Promise.resolve(latest)
            },
        }
    },
    coupons:{
        async update(params){
            let latest = await http.post('/minicart/coupons/update',params)
            return Promise.resolve(latest)
        },
    },
    skus:{
        async updateWholeTab(params){
            let latest = await http.post('/minicart/skus/batch/update',params)
            return Promise.resolve(latest)
        },
    },
    attributes:{
        async update(params){
            let latest = await http.post('/minicart/attributes/update',params)
            return Promise.resolve(latest)
        },
    },
    attributeCombinations:{
        async update(params){
            let latest = await http.post('/minicart/skus/update',params)
            return Promise.resolve(latest)
        },
    },
    sms:{
        async update(params){
            let latest = await http.post('/minicart/sms/update',params)
            return Promise.resolve(latest)
        },
    },
    facebook:{
        async update(params){
            let latest = await http.post('/minicart/facebook/update',params)
            return Promise.resolve(latest)
        },
    },
    share:{
        async update(params){
            let latest = await http.post('/minicart/share/update',params)
            return Promise.resolve(latest)
        },
    },
    payments:{
        async update(params){
            let latest = await http.post('/minicart/payments/update',params)
            return Promise.resolve(latest)
        },
    },
    plusGroups:{
        async update(params){
            let latest = await http.post('/minicart/plusgroups/update',params)
            return Promise.resolve(latest)
        }
    }

};

