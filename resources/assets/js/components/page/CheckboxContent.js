import React from 'react'
import { Checkbox } from 'element-react'
import api from '../../api'

export default class CheckboxContent extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            checkAll: false,
            cities: ['上海', '北京', '广州', '深圳'],
            checkedCities: ['上海', '北京'],
            isIndeterminate: true,
        }
    }

    handleCheckAllChange(checked) {
        const checkedCities = checked ? ['上海', '北京', '广州', '深圳'] : [];

        this.setState({
            isIndeterminate: false,
            checkAll: checked,
            checkedCities: checkedCities,
        });
    }

    async handleCheckedCitiesChange(value) {
        const checkedCount = value.length
        const citiesLength = this.state.cities.length

        this.setState({
            checkedCities: value,
            checkAll: checkedCount === citiesLength,
            isIndeterminate: checkedCount > 0 && checkedCount < citiesLength,
        });

        //返回的数据格式固定了，如果要去修改返回的结果数据，就要去修改axios中的结果处理了
        let result = await api.minicart.site.create({
            domain: 'www.baidu.com'
        })

        console.log(result)
    }

    render() {
        return (
            <div>
                <Checkbox
                    checked={this.state.checkAll}
                    indeterminate={this.state.isIndeterminate}
                    onChange={this.handleCheckAllChange.bind(this)}>
                    全选
                </Checkbox>
                <div style={{margin: '15px 0'}}></div>
                <Checkbox.Group
                    value={this.state.checkedCities}
                    onChange={this.handleCheckedCitiesChange.bind(this)}>
                    {
                        this.state.cities.map((city, index) =>
                            <Checkbox key={index} label={city}></Checkbox>
                        )
                    }
                </Checkbox.Group>
            </div>
        )
    }
}