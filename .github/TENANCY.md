# Multiple tenancy system

1. 使用单独的 `fqdn` (Fully Qualified Domain Name) 来区分不同的 tenant.
2. 使用 context 来区分不同的系统, 如 `/admin` 用于管理后台, `/api` 用于api ,  `/` 用于网站
3. Tenant 使用独立的数据库
4. Tenant 使用同样的代码
5. 同时支持系统级的设置和 tenant 级的设置
6. 后台任务使用共享的进程
7. Tenant 使用独立的文件夹
8. Tenant 的缓存
