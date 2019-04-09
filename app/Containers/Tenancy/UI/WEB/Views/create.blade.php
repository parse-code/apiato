@extends('backpack::blank')

@section('body')
    <div class="container">
        <div class="mx-auto mt-5" style="width: 700px;">
            <div class="box r-3x box-shadow-5" id="signup_app">
                <div class="box-body">
                    <img class="store_image " style="position: absolute; top:-20px; right: 10px;"  src="{{asset('static/assets/images/flying-shop.png')}}" alt="" width="150">
                    <h2 class="display-4 _700 l-s-n-1x mt-2"> <i class="iconfont icon-shop"></i> Try Shop<span class="text-primary">timall</span> free</h2>

                    <div class="box-divider mb-3"></div>
                    <div class="pr-5 pl-0" >
                        <template v-if="showSuccess">
                            <div class="text-center">
                                <i class="el-icon-success text-success" style="font-size: 70px;" ></i>
                                <h5 class="my-3">Account created</h5>
                                <span class="text-muted">Your system url</span>
                                <div style="margin-top: 15px; width: 300px;" class="mx-auto">
                                    <el-input placeholder="请输入内容" :value="redirect" readonly>
                                        <el-button slot="append"><i class="fa fa-copy"></i> Copy</el-button>
                                    </el-input>
                                </div>
                                <button class="btn primary mt-5" @click="goToSite">TURN TO MY SITE</button>
                            </div>
                        </template>
                        <template v-else>
                            <el-form :model="account" status-icon ref="account" :rules="rules" label-width="200px" class="demo-ruleForm" size="small">
                            <el-form-item label="Domain" prop="domain">
                                <el-input placeholder="Domain" v-model="account.domain">
                                    <template slot="append">.{{config('app.domain')}}</template>
                                </el-input>
                            </el-form-item>

                            <el-form-item label="Company Name" prop="company_name">
                                <el-input placeholder="Company Name" v-model="account.company_name"></el-input>
                            </el-form-item>

                            <el-form-item label="Email" prop="email">
                                <el-input type="email" v-model="account.email" v-model="account.email"></el-input>
                            </el-form-item>

                            <el-form-item label="Password" prop="password">
                                <el-input type="password" v-model="account.password" autocomplete="off"></el-input>
                            </el-form-item>

                            <el-form-item>
                                <el-button type="primary" @click="submitForm('account')" :loading="loading">SIGN UP FOR FREE</el-button>
                                <br>
                                <small class="text-muted">By signing up, you agree to our <a href="#">T & C</a> and <a href="#">privacy notice</a></small>
                            </el-form-item>
                        </el-form>
                        </template>
                    </div>
                </div>
            </div>
            <div class="text-center text-muted">
                <span><i class="fa fa-copyright"></i> {{config('app.name')}} {{date('Y')}}</span>
            </div>
        </div>
    </div>
@endsection

@push('after_styles')
    <style>
        div img {
            cursor: pointer;
            transition: all 0.8s;
        }
        div img:hover {
            transform:scale(1.5);
            transform:rotate(-30deg);
            -ms-transform:rotate(-30deg); 	/* IE 9 */
            -moz-transform:rotate(-30deg); 	/* Firefox */
            -webkit-transform:rotate(-30deg); /* Safari 和 Chrome */
            -o-transform:rotate(-30deg);
        }

        .el-form-item {
            margin-top: 20px;
        }
    </style>
@endpush

@push('after_scripts')
    <script>
        new Vue({
            el:'#signup_app',
            data() {
                const checkDomain = (rule, value, callback) => {
                    if (!value) {
                        return callback(new Error('Please choose a domain name'));
                    }

                    reqwest({
                        method:'post',
                        url:'/check_domain',
                        data: {domain:value},
                    }).then((response) => {
                        if(response.result) {
                            callback();
                        } else {
                            callback(new Error(response.message));
                        }
                    });
                };

                return {
                    showSuccess: false,
                    loading: false,
                    redirect:'',
                    account: {},
                    rules: {
                        domain: [
                            { required: true, message: 'Domain name is required', trigger:  ['blur'] },
                            { validator: checkDomain, trigger: 'blur' }
                        ],
                        email: [
                            { required: true, message: 'Email address is required', trigger:  ['blur', 'change'] },
                            { type: 'email', message: 'Please input a valid emaill address', trigger: ['blur', 'change']  }
                        ]
                    }
                };
            },
            methods: {
                submitForm(formName) {
                    this.$refs[formName].validate((valid) => {
                        if (valid) {
                            this.loading = true;
                            reqwest({
                                url: '/create',
                                method:'post',
                                data: this.account,
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            }).then( (response) => {
                                if(response.result) {
                                    this.redirect = response.redirect;
                                    this.showSuccess = true;
                                    return;
                                }
                                this.loading = false;
                                this.$message({
                                    type:'error',
                                    message:'Somthing error'
                                });
                            }).fail( (response) => {
                                this.loading = false;
                                this.$message({
                                    type:'error',
                                    message: 'Server error:' + response.response
                                });
                            });
                        } else {
                            console.log('error submit!!');
                            return false;
                        }
                    });
                },
                goToSite() {
                  location.href = '//' + this.redirect;
                },
                resetForm(formName) {
                    this.$refs[formName].resetFields();
                },
            }
        });
    </script>
@endpush
