INFO - 2017-10-24 17:50:00 --> Config Class Initialized
INFO - 2017-10-24 17:50:00 --> Hooks Class Initialized
DEBUG - 2017-10-24 17:50:00 --> UTF-8 Support Enabled
INFO - 2017-10-24 17:50:00 --> Utf8 Class Initialized
INFO - 2017-10-24 17:50:00 --> URI Class Initialized
INFO - 2017-10-24 17:50:00 --> Router Class Initialized
INFO - 2017-10-24 17:50:00 --> Output Class Initialized
INFO - 2017-10-24 17:50:00 --> Security Class Initialized
DEBUG - 2017-10-24 17:50:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 17:50:00 --> Input Class Initialized
INFO - 2017-10-24 17:50:00 --> Language Class Initialized
INFO - 2017-10-24 17:50:00 --> Language Class Initialized
INFO - 2017-10-24 17:50:00 --> Config Class Initialized
INFO - 2017-10-24 17:50:00 --> Loader Class Initialized
INFO - 2017-10-24 17:50:00 --> Helper loaded: url_helper
INFO - 2017-10-24 17:50:00 --> Helper loaded: file_helper
INFO - 2017-10-24 17:50:00 --> Helper loaded: my_helper
INFO - 2017-10-24 17:50:00 --> Helper loaded: form_helper
INFO - 2017-10-24 17:50:00 --> Database Driver Class Initialized
INFO - 2017-10-24 17:50:00 --> Email Class Initialized
INFO - 2017-10-24 17:50:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 17:50:00 --> Controller Class Initialized
INFO - 2017-10-24 17:50:00 --> Model Class Initialized
DEBUG - 2017-10-24 17:50:00 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 17:50:00 --> Model Class Initialized
DEBUG - 2017-10-24 17:50:00 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a order by date,type 
INFO - 2017-10-24 17:50:00 --> This is Entry for PDF report
DEBUG - 2017-10-24 17:50:00 --> File loaded: C:\wamp\www\shinexpense\application\modules/setting/models/Setting_model.php
INFO - 2017-10-24 17:50:00 --> Model Class Initialized
DEBUG - 2017-10-24 17:50:01 --> File loaded: C:\wamp\www\shinexpense\application\views\include/menu.php
DEBUG - 2017-10-24 17:50:01 --> File loaded: C:\wamp\www\shinexpense\application\views\include/header.php
DEBUG - 2017-10-24 17:50:01 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/tableData.php
DEBUG - 2017-10-24 17:50:01 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/index.php
DEBUG - 2017-10-24 17:50:01 --> File loaded: C:\wamp\www\shinexpense\application\views\include/footer.php
INFO - 2017-10-24 17:50:01 --> Final output sent to browser
DEBUG - 2017-10-24 17:50:01 --> Total execution time: 0.5250
INFO - 2017-10-24 17:50:01 --> Config Class Initialized
INFO - 2017-10-24 17:50:01 --> Hooks Class Initialized
DEBUG - 2017-10-24 17:50:01 --> UTF-8 Support Enabled
INFO - 2017-10-24 17:50:01 --> Utf8 Class Initialized
INFO - 2017-10-24 17:50:01 --> URI Class Initialized
INFO - 2017-10-24 17:50:01 --> Router Class Initialized
INFO - 2017-10-24 17:50:01 --> Output Class Initialized
INFO - 2017-10-24 17:50:01 --> Security Class Initialized
DEBUG - 2017-10-24 17:50:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 17:50:01 --> Input Class Initialized
INFO - 2017-10-24 17:50:01 --> Language Class Initialized
INFO - 2017-10-24 17:50:01 --> Language Class Initialized
INFO - 2017-10-24 17:50:01 --> Config Class Initialized
INFO - 2017-10-24 17:50:01 --> Loader Class Initialized
INFO - 2017-10-24 17:50:01 --> Helper loaded: url_helper
INFO - 2017-10-24 17:50:01 --> Helper loaded: file_helper
INFO - 2017-10-24 17:50:01 --> Helper loaded: my_helper
INFO - 2017-10-24 17:50:01 --> Helper loaded: form_helper
INFO - 2017-10-24 17:50:01 --> Database Driver Class Initialized
INFO - 2017-10-24 17:50:01 --> Email Class Initialized
INFO - 2017-10-24 17:50:01 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 17:50:01 --> Controller Class Initialized
INFO - 2017-10-24 17:50:01 --> Model Class Initialized
DEBUG - 2017-10-24 17:50:01 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 17:50:01 --> Model Class Initialized
DEBUG - 2017-10-24 17:50:01 -->  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' 
DEBUG - 2017-10-24 17:50:01 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a  WHERE  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' order by date,type 
INFO - 2017-10-24 17:50:01 --> Final output sent to browser
DEBUG - 2017-10-24 17:50:01 --> Total execution time: 0.2317
INFO - 2017-10-24 17:50:04 --> Config Class Initialized
INFO - 2017-10-24 17:50:04 --> Hooks Class Initialized
DEBUG - 2017-10-24 17:50:04 --> UTF-8 Support Enabled
INFO - 2017-10-24 17:50:04 --> Utf8 Class Initialized
INFO - 2017-10-24 17:50:04 --> URI Class Initialized
INFO - 2017-10-24 17:50:04 --> Router Class Initialized
INFO - 2017-10-24 17:50:04 --> Output Class Initialized
INFO - 2017-10-24 17:50:04 --> Security Class Initialized
DEBUG - 2017-10-24 17:50:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 17:50:04 --> Input Class Initialized
INFO - 2017-10-24 17:50:04 --> Language Class Initialized
INFO - 2017-10-24 17:50:04 --> Language Class Initialized
INFO - 2017-10-24 17:50:04 --> Config Class Initialized
INFO - 2017-10-24 17:50:04 --> Loader Class Initialized
INFO - 2017-10-24 17:50:04 --> Helper loaded: url_helper
INFO - 2017-10-24 17:50:04 --> Helper loaded: file_helper
INFO - 2017-10-24 17:50:04 --> Helper loaded: my_helper
INFO - 2017-10-24 17:50:04 --> Helper loaded: form_helper
INFO - 2017-10-24 17:50:04 --> Database Driver Class Initialized
INFO - 2017-10-24 17:50:04 --> Email Class Initialized
INFO - 2017-10-24 17:50:04 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 17:50:04 --> Controller Class Initialized
INFO - 2017-10-24 17:50:04 --> Model Class Initialized
DEBUG - 2017-10-24 17:50:04 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 17:50:04 --> Model Class Initialized
INFO - 2017-10-24 17:50:04 --> This is Entry for PDF report
INFO - 2017-10-24 17:50:18 --> Final output sent to browser
DEBUG - 2017-10-24 17:50:18 --> Total execution time: 14.5116
INFO - 2017-10-24 17:51:56 --> Config Class Initialized
INFO - 2017-10-24 17:51:56 --> Hooks Class Initialized
DEBUG - 2017-10-24 17:51:56 --> UTF-8 Support Enabled
INFO - 2017-10-24 17:51:56 --> Utf8 Class Initialized
INFO - 2017-10-24 17:51:56 --> URI Class Initialized
INFO - 2017-10-24 17:51:56 --> Router Class Initialized
INFO - 2017-10-24 17:51:56 --> Output Class Initialized
INFO - 2017-10-24 17:51:56 --> Security Class Initialized
DEBUG - 2017-10-24 17:51:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 17:51:56 --> Input Class Initialized
INFO - 2017-10-24 17:51:56 --> Language Class Initialized
INFO - 2017-10-24 17:51:56 --> Language Class Initialized
INFO - 2017-10-24 17:51:56 --> Config Class Initialized
INFO - 2017-10-24 17:51:56 --> Loader Class Initialized
INFO - 2017-10-24 17:51:56 --> Helper loaded: url_helper
INFO - 2017-10-24 17:51:56 --> Helper loaded: file_helper
INFO - 2017-10-24 17:51:56 --> Helper loaded: my_helper
INFO - 2017-10-24 17:51:56 --> Helper loaded: form_helper
INFO - 2017-10-24 17:51:56 --> Database Driver Class Initialized
INFO - 2017-10-24 17:51:56 --> Email Class Initialized
INFO - 2017-10-24 17:51:56 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 17:51:56 --> Controller Class Initialized
INFO - 2017-10-24 17:51:56 --> Model Class Initialized
DEBUG - 2017-10-24 17:51:56 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 17:51:56 --> Model Class Initialized
DEBUG - 2017-10-24 17:51:56 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a order by date,type 
DEBUG - 2017-10-24 17:51:56 --> File loaded: C:\wamp\www\shinexpense\application\modules/setting/models/Setting_model.php
INFO - 2017-10-24 17:51:56 --> Model Class Initialized
DEBUG - 2017-10-24 17:51:57 --> File loaded: C:\wamp\www\shinexpense\application\views\include/menu.php
DEBUG - 2017-10-24 17:51:57 --> File loaded: C:\wamp\www\shinexpense\application\views\include/header.php
DEBUG - 2017-10-24 17:51:57 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/tableData.php
DEBUG - 2017-10-24 17:51:57 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/index.php
DEBUG - 2017-10-24 17:51:57 --> File loaded: C:\wamp\www\shinexpense\application\views\include/footer.php
INFO - 2017-10-24 17:51:57 --> Final output sent to browser
DEBUG - 2017-10-24 17:51:57 --> Total execution time: 0.3750
INFO - 2017-10-24 17:51:57 --> Config Class Initialized
INFO - 2017-10-24 17:51:57 --> Hooks Class Initialized
DEBUG - 2017-10-24 17:51:57 --> UTF-8 Support Enabled
INFO - 2017-10-24 17:51:57 --> Utf8 Class Initialized
INFO - 2017-10-24 17:51:57 --> URI Class Initialized
INFO - 2017-10-24 17:51:57 --> Router Class Initialized
INFO - 2017-10-24 17:51:57 --> Output Class Initialized
INFO - 2017-10-24 17:51:57 --> Security Class Initialized
DEBUG - 2017-10-24 17:51:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 17:51:57 --> Input Class Initialized
INFO - 2017-10-24 17:51:57 --> Language Class Initialized
INFO - 2017-10-24 17:51:57 --> Language Class Initialized
INFO - 2017-10-24 17:51:57 --> Config Class Initialized
INFO - 2017-10-24 17:51:57 --> Loader Class Initialized
INFO - 2017-10-24 17:51:57 --> Helper loaded: url_helper
INFO - 2017-10-24 17:51:57 --> Helper loaded: file_helper
INFO - 2017-10-24 17:51:57 --> Helper loaded: my_helper
INFO - 2017-10-24 17:51:57 --> Helper loaded: form_helper
INFO - 2017-10-24 17:51:57 --> Database Driver Class Initialized
INFO - 2017-10-24 17:51:57 --> Email Class Initialized
INFO - 2017-10-24 17:51:57 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 17:51:57 --> Controller Class Initialized
INFO - 2017-10-24 17:51:57 --> Model Class Initialized
DEBUG - 2017-10-24 17:51:57 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 17:51:57 --> Model Class Initialized
DEBUG - 2017-10-24 17:51:57 -->  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' 
DEBUG - 2017-10-24 17:51:57 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a  WHERE  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' order by date,type 
INFO - 2017-10-24 17:51:57 --> Final output sent to browser
DEBUG - 2017-10-24 17:51:57 --> Total execution time: 0.2429
INFO - 2017-10-24 17:51:59 --> Config Class Initialized
INFO - 2017-10-24 17:51:59 --> Hooks Class Initialized
DEBUG - 2017-10-24 17:51:59 --> UTF-8 Support Enabled
INFO - 2017-10-24 17:51:59 --> Utf8 Class Initialized
INFO - 2017-10-24 17:51:59 --> URI Class Initialized
INFO - 2017-10-24 17:51:59 --> Router Class Initialized
INFO - 2017-10-24 17:51:59 --> Output Class Initialized
INFO - 2017-10-24 17:51:59 --> Security Class Initialized
DEBUG - 2017-10-24 17:51:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 17:51:59 --> Input Class Initialized
INFO - 2017-10-24 17:51:59 --> Language Class Initialized
INFO - 2017-10-24 17:51:59 --> Language Class Initialized
INFO - 2017-10-24 17:51:59 --> Config Class Initialized
INFO - 2017-10-24 17:51:59 --> Loader Class Initialized
INFO - 2017-10-24 17:51:59 --> Helper loaded: url_helper
INFO - 2017-10-24 17:51:59 --> Helper loaded: file_helper
INFO - 2017-10-24 17:51:59 --> Helper loaded: my_helper
INFO - 2017-10-24 17:51:59 --> Helper loaded: form_helper
INFO - 2017-10-24 17:51:59 --> Database Driver Class Initialized
INFO - 2017-10-24 17:51:59 --> Email Class Initialized
INFO - 2017-10-24 17:51:59 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 17:51:59 --> Controller Class Initialized
INFO - 2017-10-24 17:51:59 --> Model Class Initialized
DEBUG - 2017-10-24 17:51:59 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 17:51:59 --> Model Class Initialized
INFO - 2017-10-24 17:51:59 --> This is Entry for PDF report
INFO - 2017-10-24 17:52:12 --> Final output sent to browser
DEBUG - 2017-10-24 17:52:12 --> Total execution time: 13.6289
INFO - 2017-10-24 17:53:39 --> Config Class Initialized
INFO - 2017-10-24 17:53:39 --> Hooks Class Initialized
DEBUG - 2017-10-24 17:53:39 --> UTF-8 Support Enabled
INFO - 2017-10-24 17:53:39 --> Utf8 Class Initialized
INFO - 2017-10-24 17:53:39 --> URI Class Initialized
INFO - 2017-10-24 17:53:39 --> Router Class Initialized
INFO - 2017-10-24 17:53:39 --> Output Class Initialized
INFO - 2017-10-24 17:53:39 --> Security Class Initialized
DEBUG - 2017-10-24 17:53:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 17:53:39 --> Input Class Initialized
INFO - 2017-10-24 17:53:39 --> Language Class Initialized
INFO - 2017-10-24 17:53:39 --> Language Class Initialized
INFO - 2017-10-24 17:53:39 --> Config Class Initialized
INFO - 2017-10-24 17:53:39 --> Loader Class Initialized
INFO - 2017-10-24 17:53:39 --> Helper loaded: url_helper
INFO - 2017-10-24 17:53:39 --> Helper loaded: file_helper
INFO - 2017-10-24 17:53:39 --> Helper loaded: my_helper
INFO - 2017-10-24 17:53:39 --> Helper loaded: form_helper
INFO - 2017-10-24 17:53:40 --> Database Driver Class Initialized
INFO - 2017-10-24 17:53:40 --> Email Class Initialized
INFO - 2017-10-24 17:53:40 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 17:53:40 --> Controller Class Initialized
INFO - 2017-10-24 17:53:40 --> Model Class Initialized
DEBUG - 2017-10-24 17:53:40 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 17:53:40 --> Model Class Initialized
DEBUG - 2017-10-24 17:53:40 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a order by date,type 
DEBUG - 2017-10-24 17:53:40 --> File loaded: C:\wamp\www\shinexpense\application\modules/setting/models/Setting_model.php
INFO - 2017-10-24 17:53:40 --> Model Class Initialized
DEBUG - 2017-10-24 17:53:40 --> File loaded: C:\wamp\www\shinexpense\application\views\include/menu.php
DEBUG - 2017-10-24 17:53:40 --> File loaded: C:\wamp\www\shinexpense\application\views\include/header.php
DEBUG - 2017-10-24 17:53:40 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/tableData.php
DEBUG - 2017-10-24 17:53:40 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/index.php
DEBUG - 2017-10-24 17:53:40 --> File loaded: C:\wamp\www\shinexpense\application\views\include/footer.php
INFO - 2017-10-24 17:53:40 --> Final output sent to browser
DEBUG - 2017-10-24 17:53:40 --> Total execution time: 0.3567
INFO - 2017-10-24 17:53:40 --> Config Class Initialized
INFO - 2017-10-24 17:53:40 --> Hooks Class Initialized
DEBUG - 2017-10-24 17:53:40 --> UTF-8 Support Enabled
INFO - 2017-10-24 17:53:40 --> Utf8 Class Initialized
INFO - 2017-10-24 17:53:40 --> URI Class Initialized
INFO - 2017-10-24 17:53:40 --> Router Class Initialized
INFO - 2017-10-24 17:53:40 --> Output Class Initialized
INFO - 2017-10-24 17:53:40 --> Security Class Initialized
DEBUG - 2017-10-24 17:53:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 17:53:40 --> Input Class Initialized
INFO - 2017-10-24 17:53:40 --> Language Class Initialized
INFO - 2017-10-24 17:53:40 --> Language Class Initialized
INFO - 2017-10-24 17:53:40 --> Config Class Initialized
INFO - 2017-10-24 17:53:40 --> Loader Class Initialized
INFO - 2017-10-24 17:53:40 --> Helper loaded: url_helper
INFO - 2017-10-24 17:53:40 --> Helper loaded: file_helper
INFO - 2017-10-24 17:53:40 --> Helper loaded: my_helper
INFO - 2017-10-24 17:53:40 --> Helper loaded: form_helper
INFO - 2017-10-24 17:53:40 --> Database Driver Class Initialized
INFO - 2017-10-24 17:53:40 --> Email Class Initialized
INFO - 2017-10-24 17:53:40 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 17:53:40 --> Controller Class Initialized
INFO - 2017-10-24 17:53:40 --> Model Class Initialized
DEBUG - 2017-10-24 17:53:40 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 17:53:40 --> Model Class Initialized
DEBUG - 2017-10-24 17:53:40 -->  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' 
DEBUG - 2017-10-24 17:53:40 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a  WHERE  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' order by date,type 
INFO - 2017-10-24 17:53:41 --> Final output sent to browser
DEBUG - 2017-10-24 17:53:41 --> Total execution time: 0.2524
INFO - 2017-10-24 17:53:49 --> Config Class Initialized
INFO - 2017-10-24 17:53:49 --> Hooks Class Initialized
DEBUG - 2017-10-24 17:53:49 --> UTF-8 Support Enabled
INFO - 2017-10-24 17:53:49 --> Utf8 Class Initialized
INFO - 2017-10-24 17:53:49 --> URI Class Initialized
INFO - 2017-10-24 17:53:49 --> Router Class Initialized
INFO - 2017-10-24 17:53:49 --> Output Class Initialized
INFO - 2017-10-24 17:53:49 --> Security Class Initialized
DEBUG - 2017-10-24 17:53:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 17:53:49 --> Input Class Initialized
INFO - 2017-10-24 17:53:49 --> Language Class Initialized
INFO - 2017-10-24 17:53:49 --> Language Class Initialized
INFO - 2017-10-24 17:53:49 --> Config Class Initialized
INFO - 2017-10-24 17:53:49 --> Loader Class Initialized
INFO - 2017-10-24 17:53:49 --> Helper loaded: url_helper
INFO - 2017-10-24 17:53:49 --> Helper loaded: file_helper
INFO - 2017-10-24 17:53:49 --> Helper loaded: my_helper
INFO - 2017-10-24 17:53:49 --> Helper loaded: form_helper
INFO - 2017-10-24 17:53:49 --> Database Driver Class Initialized
INFO - 2017-10-24 17:53:49 --> Email Class Initialized
INFO - 2017-10-24 17:53:49 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 17:53:49 --> Controller Class Initialized
INFO - 2017-10-24 17:53:49 --> Model Class Initialized
DEBUG - 2017-10-24 17:53:49 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 17:53:49 --> Model Class Initialized
INFO - 2017-10-24 17:53:49 --> This is Entry for PDF report
ERROR - 2017-10-24 17:53:49 --> Severity: Error --> Call to a member function Header() on a non-object C:\wamp\www\shinexpense\application\modules\reports\controllers\Reports.php 61
INFO - 2017-10-24 18:06:34 --> Config Class Initialized
INFO - 2017-10-24 18:06:34 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:06:34 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:06:34 --> Utf8 Class Initialized
INFO - 2017-10-24 18:06:34 --> URI Class Initialized
INFO - 2017-10-24 18:06:34 --> Router Class Initialized
INFO - 2017-10-24 18:06:34 --> Output Class Initialized
INFO - 2017-10-24 18:06:34 --> Security Class Initialized
DEBUG - 2017-10-24 18:06:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:06:34 --> Input Class Initialized
INFO - 2017-10-24 18:06:34 --> Language Class Initialized
INFO - 2017-10-24 18:06:34 --> Language Class Initialized
INFO - 2017-10-24 18:06:34 --> Config Class Initialized
INFO - 2017-10-24 18:06:34 --> Loader Class Initialized
INFO - 2017-10-24 18:06:34 --> Helper loaded: url_helper
INFO - 2017-10-24 18:06:34 --> Helper loaded: file_helper
INFO - 2017-10-24 18:06:34 --> Helper loaded: my_helper
INFO - 2017-10-24 18:06:34 --> Helper loaded: form_helper
INFO - 2017-10-24 18:06:34 --> Database Driver Class Initialized
INFO - 2017-10-24 18:06:34 --> Email Class Initialized
INFO - 2017-10-24 18:06:34 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:06:34 --> Controller Class Initialized
INFO - 2017-10-24 18:06:34 --> Model Class Initialized
DEBUG - 2017-10-24 18:06:34 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 18:06:34 --> Model Class Initialized
DEBUG - 2017-10-24 18:06:34 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a order by date,type 
DEBUG - 2017-10-24 18:06:34 --> File loaded: C:\wamp\www\shinexpense\application\modules/setting/models/Setting_model.php
INFO - 2017-10-24 18:06:34 --> Model Class Initialized
DEBUG - 2017-10-24 18:06:34 --> File loaded: C:\wamp\www\shinexpense\application\views\include/menu.php
DEBUG - 2017-10-24 18:06:34 --> File loaded: C:\wamp\www\shinexpense\application\views\include/header.php
DEBUG - 2017-10-24 18:06:34 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/tableData.php
DEBUG - 2017-10-24 18:06:34 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/index.php
DEBUG - 2017-10-24 18:06:34 --> File loaded: C:\wamp\www\shinexpense\application\views\include/footer.php
INFO - 2017-10-24 18:06:34 --> Final output sent to browser
DEBUG - 2017-10-24 18:06:34 --> Total execution time: 0.3775
INFO - 2017-10-24 18:06:34 --> Config Class Initialized
INFO - 2017-10-24 18:06:34 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:06:34 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:06:34 --> Utf8 Class Initialized
INFO - 2017-10-24 18:06:34 --> URI Class Initialized
INFO - 2017-10-24 18:06:34 --> Router Class Initialized
INFO - 2017-10-24 18:06:34 --> Output Class Initialized
INFO - 2017-10-24 18:06:34 --> Security Class Initialized
DEBUG - 2017-10-24 18:06:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:06:34 --> Input Class Initialized
INFO - 2017-10-24 18:06:34 --> Language Class Initialized
INFO - 2017-10-24 18:06:35 --> Language Class Initialized
INFO - 2017-10-24 18:06:35 --> Config Class Initialized
INFO - 2017-10-24 18:06:35 --> Loader Class Initialized
INFO - 2017-10-24 18:06:35 --> Helper loaded: url_helper
INFO - 2017-10-24 18:06:35 --> Helper loaded: file_helper
INFO - 2017-10-24 18:06:35 --> Helper loaded: my_helper
INFO - 2017-10-24 18:06:35 --> Helper loaded: form_helper
INFO - 2017-10-24 18:06:35 --> Database Driver Class Initialized
INFO - 2017-10-24 18:06:35 --> Email Class Initialized
INFO - 2017-10-24 18:06:35 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:06:35 --> Controller Class Initialized
INFO - 2017-10-24 18:06:35 --> Model Class Initialized
DEBUG - 2017-10-24 18:06:35 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 18:06:35 --> Model Class Initialized
DEBUG - 2017-10-24 18:06:35 -->  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' 
DEBUG - 2017-10-24 18:06:35 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a  WHERE  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' order by date,type 
INFO - 2017-10-24 18:06:35 --> Final output sent to browser
DEBUG - 2017-10-24 18:06:35 --> Total execution time: 0.2398
INFO - 2017-10-24 18:06:35 --> Config Class Initialized
INFO - 2017-10-24 18:06:35 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:06:35 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:06:35 --> Utf8 Class Initialized
INFO - 2017-10-24 18:06:35 --> URI Class Initialized
INFO - 2017-10-24 18:06:35 --> Router Class Initialized
INFO - 2017-10-24 18:06:35 --> Output Class Initialized
INFO - 2017-10-24 18:06:35 --> Security Class Initialized
DEBUG - 2017-10-24 18:06:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:06:35 --> Input Class Initialized
INFO - 2017-10-24 18:06:35 --> Language Class Initialized
INFO - 2017-10-24 18:06:35 --> Language Class Initialized
INFO - 2017-10-24 18:06:35 --> Config Class Initialized
INFO - 2017-10-24 18:06:35 --> Loader Class Initialized
INFO - 2017-10-24 18:06:35 --> Helper loaded: url_helper
INFO - 2017-10-24 18:06:35 --> Helper loaded: file_helper
INFO - 2017-10-24 18:06:35 --> Helper loaded: my_helper
INFO - 2017-10-24 18:06:35 --> Helper loaded: form_helper
INFO - 2017-10-24 18:06:35 --> Database Driver Class Initialized
INFO - 2017-10-24 18:06:35 --> Email Class Initialized
INFO - 2017-10-24 18:06:35 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:06:35 --> Controller Class Initialized
INFO - 2017-10-24 18:06:35 --> Model Class Initialized
DEBUG - 2017-10-24 18:06:35 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 18:06:35 --> Model Class Initialized
INFO - 2017-10-24 18:06:36 --> This is Entry for PDF report
INFO - 2017-10-24 18:06:49 --> Final output sent to browser
DEBUG - 2017-10-24 18:06:49 --> Total execution time: 13.8759
INFO - 2017-10-24 18:25:07 --> Config Class Initialized
INFO - 2017-10-24 18:25:07 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:25:07 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:25:07 --> Utf8 Class Initialized
INFO - 2017-10-24 18:25:07 --> URI Class Initialized
INFO - 2017-10-24 18:25:07 --> Router Class Initialized
INFO - 2017-10-24 18:25:07 --> Output Class Initialized
INFO - 2017-10-24 18:25:07 --> Security Class Initialized
DEBUG - 2017-10-24 18:25:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:25:07 --> Input Class Initialized
INFO - 2017-10-24 18:25:07 --> Language Class Initialized
INFO - 2017-10-24 18:25:07 --> Language Class Initialized
INFO - 2017-10-24 18:25:07 --> Config Class Initialized
INFO - 2017-10-24 18:25:07 --> Loader Class Initialized
INFO - 2017-10-24 18:25:07 --> Helper loaded: url_helper
INFO - 2017-10-24 18:25:07 --> Helper loaded: file_helper
INFO - 2017-10-24 18:25:07 --> Helper loaded: my_helper
INFO - 2017-10-24 18:25:07 --> Helper loaded: form_helper
INFO - 2017-10-24 18:25:07 --> Database Driver Class Initialized
INFO - 2017-10-24 18:25:07 --> Email Class Initialized
INFO - 2017-10-24 18:25:07 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:25:07 --> Controller Class Initialized
INFO - 2017-10-24 18:25:07 --> Model Class Initialized
DEBUG - 2017-10-24 18:25:07 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 18:25:07 --> Model Class Initialized
DEBUG - 2017-10-24 18:25:07 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a order by date,type 
DEBUG - 2017-10-24 18:25:07 --> File loaded: C:\wamp\www\shinexpense\application\modules/setting/models/Setting_model.php
INFO - 2017-10-24 18:25:07 --> Model Class Initialized
DEBUG - 2017-10-24 18:25:07 --> File loaded: C:\wamp\www\shinexpense\application\views\include/menu.php
DEBUG - 2017-10-24 18:25:07 --> File loaded: C:\wamp\www\shinexpense\application\views\include/header.php
DEBUG - 2017-10-24 18:25:07 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/tableData.php
DEBUG - 2017-10-24 18:25:07 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/index.php
DEBUG - 2017-10-24 18:25:07 --> File loaded: C:\wamp\www\shinexpense\application\views\include/footer.php
INFO - 2017-10-24 18:25:07 --> Final output sent to browser
DEBUG - 2017-10-24 18:25:07 --> Total execution time: 0.3700
INFO - 2017-10-24 18:25:07 --> Config Class Initialized
INFO - 2017-10-24 18:25:07 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:25:07 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:25:07 --> Utf8 Class Initialized
INFO - 2017-10-24 18:25:07 --> URI Class Initialized
INFO - 2017-10-24 18:25:07 --> Router Class Initialized
INFO - 2017-10-24 18:25:07 --> Output Class Initialized
INFO - 2017-10-24 18:25:07 --> Security Class Initialized
DEBUG - 2017-10-24 18:25:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:25:07 --> Input Class Initialized
INFO - 2017-10-24 18:25:07 --> Language Class Initialized
INFO - 2017-10-24 18:25:07 --> Language Class Initialized
INFO - 2017-10-24 18:25:07 --> Config Class Initialized
INFO - 2017-10-24 18:25:07 --> Loader Class Initialized
INFO - 2017-10-24 18:25:08 --> Helper loaded: url_helper
INFO - 2017-10-24 18:25:08 --> Helper loaded: file_helper
INFO - 2017-10-24 18:25:08 --> Helper loaded: my_helper
INFO - 2017-10-24 18:25:08 --> Helper loaded: form_helper
INFO - 2017-10-24 18:25:08 --> Database Driver Class Initialized
INFO - 2017-10-24 18:25:08 --> Email Class Initialized
INFO - 2017-10-24 18:25:08 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:25:08 --> Controller Class Initialized
INFO - 2017-10-24 18:25:08 --> Model Class Initialized
DEBUG - 2017-10-24 18:25:08 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 18:25:08 --> Model Class Initialized
DEBUG - 2017-10-24 18:25:08 -->  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' 
DEBUG - 2017-10-24 18:25:08 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a  WHERE  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' order by date,type 
INFO - 2017-10-24 18:25:08 --> Final output sent to browser
DEBUG - 2017-10-24 18:25:08 --> Total execution time: 0.2579
INFO - 2017-10-24 18:25:09 --> Config Class Initialized
INFO - 2017-10-24 18:25:09 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:25:09 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:25:09 --> Utf8 Class Initialized
INFO - 2017-10-24 18:25:09 --> URI Class Initialized
INFO - 2017-10-24 18:25:09 --> Router Class Initialized
INFO - 2017-10-24 18:25:09 --> Output Class Initialized
INFO - 2017-10-24 18:25:09 --> Security Class Initialized
DEBUG - 2017-10-24 18:25:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:25:09 --> Input Class Initialized
INFO - 2017-10-24 18:25:09 --> Language Class Initialized
INFO - 2017-10-24 18:25:09 --> Language Class Initialized
INFO - 2017-10-24 18:25:09 --> Config Class Initialized
INFO - 2017-10-24 18:25:09 --> Loader Class Initialized
INFO - 2017-10-24 18:25:09 --> Helper loaded: url_helper
INFO - 2017-10-24 18:25:09 --> Helper loaded: file_helper
INFO - 2017-10-24 18:25:09 --> Helper loaded: my_helper
INFO - 2017-10-24 18:25:09 --> Helper loaded: form_helper
INFO - 2017-10-24 18:25:09 --> Database Driver Class Initialized
INFO - 2017-10-24 18:25:09 --> Email Class Initialized
INFO - 2017-10-24 18:25:09 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:25:09 --> Controller Class Initialized
INFO - 2017-10-24 18:25:09 --> Model Class Initialized
DEBUG - 2017-10-24 18:25:09 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 18:25:09 --> Model Class Initialized
INFO - 2017-10-24 18:25:09 --> This is Entry for PDF report
ERROR - 2017-10-24 18:25:25 --> Severity: 4096 --> Object of class DateTime could not be converted to string C:\wamp\www\shinexpense\application\modules\reports\controllers\Reports.php 132
ERROR - 2017-10-24 18:25:25 --> Severity: 4096 --> Object of class DateTime could not be converted to string C:\wamp\www\shinexpense\application\modules\reports\controllers\Reports.php 134
INFO - 2017-10-24 18:25:25 --> Final output sent to browser
DEBUG - 2017-10-24 18:25:25 --> Total execution time: 16.5443
INFO - 2017-10-24 18:27:50 --> Config Class Initialized
INFO - 2017-10-24 18:27:50 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:27:50 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:27:50 --> Utf8 Class Initialized
INFO - 2017-10-24 18:27:50 --> URI Class Initialized
INFO - 2017-10-24 18:27:50 --> Router Class Initialized
INFO - 2017-10-24 18:27:50 --> Output Class Initialized
INFO - 2017-10-24 18:27:50 --> Security Class Initialized
DEBUG - 2017-10-24 18:27:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:27:50 --> Input Class Initialized
INFO - 2017-10-24 18:27:50 --> Language Class Initialized
INFO - 2017-10-24 18:27:50 --> Language Class Initialized
INFO - 2017-10-24 18:27:50 --> Config Class Initialized
INFO - 2017-10-24 18:27:50 --> Loader Class Initialized
INFO - 2017-10-24 18:27:50 --> Helper loaded: url_helper
INFO - 2017-10-24 18:27:50 --> Helper loaded: file_helper
INFO - 2017-10-24 18:27:50 --> Helper loaded: my_helper
INFO - 2017-10-24 18:27:50 --> Helper loaded: form_helper
INFO - 2017-10-24 18:27:50 --> Database Driver Class Initialized
INFO - 2017-10-24 18:27:50 --> Email Class Initialized
INFO - 2017-10-24 18:27:50 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:27:50 --> Controller Class Initialized
INFO - 2017-10-24 18:27:50 --> Model Class Initialized
DEBUG - 2017-10-24 18:27:50 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 18:27:50 --> Model Class Initialized
DEBUG - 2017-10-24 18:27:50 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a order by date,type 
DEBUG - 2017-10-24 18:27:50 --> File loaded: C:\wamp\www\shinexpense\application\modules/setting/models/Setting_model.php
INFO - 2017-10-24 18:27:50 --> Model Class Initialized
DEBUG - 2017-10-24 18:27:50 --> File loaded: C:\wamp\www\shinexpense\application\views\include/menu.php
DEBUG - 2017-10-24 18:27:50 --> File loaded: C:\wamp\www\shinexpense\application\views\include/header.php
DEBUG - 2017-10-24 18:27:50 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/tableData.php
DEBUG - 2017-10-24 18:27:50 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/index.php
DEBUG - 2017-10-24 18:27:50 --> File loaded: C:\wamp\www\shinexpense\application\views\include/footer.php
INFO - 2017-10-24 18:27:50 --> Final output sent to browser
DEBUG - 2017-10-24 18:27:50 --> Total execution time: 0.3675
INFO - 2017-10-24 18:27:51 --> Config Class Initialized
INFO - 2017-10-24 18:27:51 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:27:51 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:27:51 --> Utf8 Class Initialized
INFO - 2017-10-24 18:27:51 --> URI Class Initialized
INFO - 2017-10-24 18:27:51 --> Router Class Initialized
INFO - 2017-10-24 18:27:51 --> Output Class Initialized
INFO - 2017-10-24 18:27:51 --> Security Class Initialized
DEBUG - 2017-10-24 18:27:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:27:51 --> Input Class Initialized
INFO - 2017-10-24 18:27:51 --> Language Class Initialized
INFO - 2017-10-24 18:27:51 --> Language Class Initialized
INFO - 2017-10-24 18:27:51 --> Config Class Initialized
INFO - 2017-10-24 18:27:51 --> Loader Class Initialized
INFO - 2017-10-24 18:27:51 --> Helper loaded: url_helper
INFO - 2017-10-24 18:27:51 --> Helper loaded: file_helper
INFO - 2017-10-24 18:27:51 --> Helper loaded: my_helper
INFO - 2017-10-24 18:27:51 --> Helper loaded: form_helper
INFO - 2017-10-24 18:27:51 --> Database Driver Class Initialized
INFO - 2017-10-24 18:27:51 --> Email Class Initialized
INFO - 2017-10-24 18:27:51 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:27:51 --> Controller Class Initialized
INFO - 2017-10-24 18:27:51 --> Model Class Initialized
DEBUG - 2017-10-24 18:27:51 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 18:27:51 --> Model Class Initialized
DEBUG - 2017-10-24 18:27:51 -->  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' 
DEBUG - 2017-10-24 18:27:51 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a  WHERE  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' order by date,type 
INFO - 2017-10-24 18:27:51 --> Final output sent to browser
DEBUG - 2017-10-24 18:27:51 --> Total execution time: 0.2735
INFO - 2017-10-24 18:27:52 --> Config Class Initialized
INFO - 2017-10-24 18:27:52 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:27:52 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:27:52 --> Utf8 Class Initialized
INFO - 2017-10-24 18:27:52 --> URI Class Initialized
INFO - 2017-10-24 18:27:52 --> Router Class Initialized
INFO - 2017-10-24 18:27:52 --> Output Class Initialized
INFO - 2017-10-24 18:27:52 --> Security Class Initialized
DEBUG - 2017-10-24 18:27:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:27:52 --> Input Class Initialized
INFO - 2017-10-24 18:27:52 --> Language Class Initialized
INFO - 2017-10-24 18:27:52 --> Language Class Initialized
INFO - 2017-10-24 18:27:52 --> Config Class Initialized
INFO - 2017-10-24 18:27:52 --> Loader Class Initialized
INFO - 2017-10-24 18:27:52 --> Helper loaded: url_helper
INFO - 2017-10-24 18:27:52 --> Helper loaded: file_helper
INFO - 2017-10-24 18:27:52 --> Helper loaded: my_helper
INFO - 2017-10-24 18:27:52 --> Helper loaded: form_helper
INFO - 2017-10-24 18:27:52 --> Database Driver Class Initialized
INFO - 2017-10-24 18:27:52 --> Email Class Initialized
INFO - 2017-10-24 18:27:52 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:27:52 --> Controller Class Initialized
INFO - 2017-10-24 18:27:52 --> Model Class Initialized
DEBUG - 2017-10-24 18:27:52 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 18:27:52 --> Model Class Initialized
INFO - 2017-10-24 18:27:53 --> This is Entry for PDF report
ERROR - 2017-10-24 18:28:07 --> Severity: 4096 --> Object of class DateTime could not be converted to string C:\wamp\www\shinexpense\application\modules\reports\controllers\Reports.php 132
ERROR - 2017-10-24 18:28:07 --> Severity: 4096 --> Object of class DateTime could not be converted to string C:\wamp\www\shinexpense\application\modules\reports\controllers\Reports.php 134
INFO - 2017-10-24 18:28:07 --> Final output sent to browser
DEBUG - 2017-10-24 18:28:07 --> Total execution time: 14.9052
INFO - 2017-10-24 18:28:58 --> Config Class Initialized
INFO - 2017-10-24 18:28:58 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:28:58 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:28:58 --> Utf8 Class Initialized
INFO - 2017-10-24 18:28:58 --> URI Class Initialized
INFO - 2017-10-24 18:28:58 --> Router Class Initialized
INFO - 2017-10-24 18:28:58 --> Output Class Initialized
INFO - 2017-10-24 18:28:58 --> Security Class Initialized
DEBUG - 2017-10-24 18:28:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:28:58 --> Input Class Initialized
INFO - 2017-10-24 18:28:58 --> Language Class Initialized
INFO - 2017-10-24 18:28:58 --> Language Class Initialized
INFO - 2017-10-24 18:28:58 --> Config Class Initialized
INFO - 2017-10-24 18:28:58 --> Loader Class Initialized
INFO - 2017-10-24 18:28:58 --> Helper loaded: url_helper
INFO - 2017-10-24 18:28:58 --> Helper loaded: file_helper
INFO - 2017-10-24 18:28:58 --> Helper loaded: my_helper
INFO - 2017-10-24 18:28:58 --> Helper loaded: form_helper
INFO - 2017-10-24 18:28:58 --> Database Driver Class Initialized
INFO - 2017-10-24 18:28:58 --> Email Class Initialized
INFO - 2017-10-24 18:28:58 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:28:58 --> Controller Class Initialized
INFO - 2017-10-24 18:28:58 --> Model Class Initialized
DEBUG - 2017-10-24 18:28:58 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 18:28:58 --> Model Class Initialized
DEBUG - 2017-10-24 18:28:58 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a order by date,type 
DEBUG - 2017-10-24 18:28:58 --> File loaded: C:\wamp\www\shinexpense\application\modules/setting/models/Setting_model.php
INFO - 2017-10-24 18:28:58 --> Model Class Initialized
DEBUG - 2017-10-24 18:28:58 --> File loaded: C:\wamp\www\shinexpense\application\views\include/menu.php
DEBUG - 2017-10-24 18:28:58 --> File loaded: C:\wamp\www\shinexpense\application\views\include/header.php
DEBUG - 2017-10-24 18:28:58 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/tableData.php
DEBUG - 2017-10-24 18:28:58 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/index.php
DEBUG - 2017-10-24 18:28:58 --> File loaded: C:\wamp\www\shinexpense\application\views\include/footer.php
INFO - 2017-10-24 18:28:58 --> Final output sent to browser
DEBUG - 2017-10-24 18:28:58 --> Total execution time: 0.3725
INFO - 2017-10-24 18:28:59 --> Config Class Initialized
INFO - 2017-10-24 18:28:59 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:28:59 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:28:59 --> Utf8 Class Initialized
INFO - 2017-10-24 18:28:59 --> URI Class Initialized
INFO - 2017-10-24 18:28:59 --> Router Class Initialized
INFO - 2017-10-24 18:28:59 --> Output Class Initialized
INFO - 2017-10-24 18:28:59 --> Security Class Initialized
DEBUG - 2017-10-24 18:28:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:28:59 --> Input Class Initialized
INFO - 2017-10-24 18:28:59 --> Language Class Initialized
INFO - 2017-10-24 18:28:59 --> Language Class Initialized
INFO - 2017-10-24 18:28:59 --> Config Class Initialized
INFO - 2017-10-24 18:28:59 --> Loader Class Initialized
INFO - 2017-10-24 18:28:59 --> Helper loaded: url_helper
INFO - 2017-10-24 18:28:59 --> Helper loaded: file_helper
INFO - 2017-10-24 18:28:59 --> Helper loaded: my_helper
INFO - 2017-10-24 18:28:59 --> Helper loaded: form_helper
INFO - 2017-10-24 18:28:59 --> Database Driver Class Initialized
INFO - 2017-10-24 18:28:59 --> Email Class Initialized
INFO - 2017-10-24 18:28:59 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:28:59 --> Controller Class Initialized
INFO - 2017-10-24 18:28:59 --> Model Class Initialized
DEBUG - 2017-10-24 18:28:59 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 18:28:59 --> Model Class Initialized
DEBUG - 2017-10-24 18:28:59 -->  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' 
DEBUG - 2017-10-24 18:28:59 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a  WHERE  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' order by date,type 
INFO - 2017-10-24 18:28:59 --> Final output sent to browser
DEBUG - 2017-10-24 18:28:59 --> Total execution time: 0.2542
INFO - 2017-10-24 18:29:00 --> Config Class Initialized
INFO - 2017-10-24 18:29:00 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:29:00 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:29:00 --> Utf8 Class Initialized
INFO - 2017-10-24 18:29:00 --> URI Class Initialized
INFO - 2017-10-24 18:29:00 --> Router Class Initialized
INFO - 2017-10-24 18:29:00 --> Output Class Initialized
INFO - 2017-10-24 18:29:00 --> Security Class Initialized
DEBUG - 2017-10-24 18:29:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:29:00 --> Input Class Initialized
INFO - 2017-10-24 18:29:00 --> Language Class Initialized
INFO - 2017-10-24 18:29:00 --> Language Class Initialized
INFO - 2017-10-24 18:29:00 --> Config Class Initialized
INFO - 2017-10-24 18:29:00 --> Loader Class Initialized
INFO - 2017-10-24 18:29:00 --> Helper loaded: url_helper
INFO - 2017-10-24 18:29:00 --> Helper loaded: file_helper
INFO - 2017-10-24 18:29:00 --> Helper loaded: my_helper
INFO - 2017-10-24 18:29:00 --> Helper loaded: form_helper
INFO - 2017-10-24 18:29:00 --> Database Driver Class Initialized
INFO - 2017-10-24 18:29:00 --> Email Class Initialized
INFO - 2017-10-24 18:29:00 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:29:00 --> Controller Class Initialized
INFO - 2017-10-24 18:29:00 --> Model Class Initialized
DEBUG - 2017-10-24 18:29:00 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 18:29:00 --> Model Class Initialized
INFO - 2017-10-24 18:29:00 --> This is Entry for PDF report
INFO - 2017-10-24 18:29:13 --> Final output sent to browser
DEBUG - 2017-10-24 18:29:13 --> Total execution time: 13.4888
INFO - 2017-10-24 18:42:38 --> Config Class Initialized
INFO - 2017-10-24 18:42:38 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:42:38 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:42:38 --> Utf8 Class Initialized
INFO - 2017-10-24 18:42:38 --> URI Class Initialized
INFO - 2017-10-24 18:42:38 --> Router Class Initialized
INFO - 2017-10-24 18:42:38 --> Output Class Initialized
INFO - 2017-10-24 18:42:38 --> Security Class Initialized
DEBUG - 2017-10-24 18:42:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:42:38 --> Input Class Initialized
INFO - 2017-10-24 18:42:38 --> Language Class Initialized
INFO - 2017-10-24 18:42:38 --> Language Class Initialized
INFO - 2017-10-24 18:42:38 --> Config Class Initialized
INFO - 2017-10-24 18:42:38 --> Loader Class Initialized
INFO - 2017-10-24 18:42:38 --> Helper loaded: url_helper
INFO - 2017-10-24 18:42:38 --> Helper loaded: file_helper
INFO - 2017-10-24 18:42:38 --> Helper loaded: my_helper
INFO - 2017-10-24 18:42:38 --> Helper loaded: form_helper
INFO - 2017-10-24 18:42:38 --> Database Driver Class Initialized
INFO - 2017-10-24 18:42:39 --> Email Class Initialized
INFO - 2017-10-24 18:42:39 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:42:39 --> Controller Class Initialized
INFO - 2017-10-24 18:42:39 --> Model Class Initialized
DEBUG - 2017-10-24 18:42:39 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 18:42:39 --> Model Class Initialized
DEBUG - 2017-10-24 18:42:39 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a order by date,type 
DEBUG - 2017-10-24 18:42:39 --> File loaded: C:\wamp\www\shinexpense\application\modules/setting/models/Setting_model.php
INFO - 2017-10-24 18:42:39 --> Model Class Initialized
DEBUG - 2017-10-24 18:42:39 --> File loaded: C:\wamp\www\shinexpense\application\views\include/menu.php
DEBUG - 2017-10-24 18:42:39 --> File loaded: C:\wamp\www\shinexpense\application\views\include/header.php
DEBUG - 2017-10-24 18:42:39 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/tableData.php
DEBUG - 2017-10-24 18:42:39 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/index.php
DEBUG - 2017-10-24 18:42:39 --> File loaded: C:\wamp\www\shinexpense\application\views\include/footer.php
INFO - 2017-10-24 18:42:39 --> Final output sent to browser
DEBUG - 2017-10-24 18:42:39 --> Total execution time: 0.4325
INFO - 2017-10-24 18:42:39 --> Config Class Initialized
INFO - 2017-10-24 18:42:39 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:42:39 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:42:39 --> Utf8 Class Initialized
INFO - 2017-10-24 18:42:39 --> URI Class Initialized
INFO - 2017-10-24 18:42:39 --> Router Class Initialized
INFO - 2017-10-24 18:42:39 --> Output Class Initialized
INFO - 2017-10-24 18:42:39 --> Security Class Initialized
DEBUG - 2017-10-24 18:42:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:42:39 --> Input Class Initialized
INFO - 2017-10-24 18:42:39 --> Language Class Initialized
INFO - 2017-10-24 18:42:39 --> Language Class Initialized
INFO - 2017-10-24 18:42:39 --> Config Class Initialized
INFO - 2017-10-24 18:42:39 --> Loader Class Initialized
INFO - 2017-10-24 18:42:39 --> Helper loaded: url_helper
INFO - 2017-10-24 18:42:39 --> Helper loaded: file_helper
INFO - 2017-10-24 18:42:39 --> Helper loaded: my_helper
INFO - 2017-10-24 18:42:39 --> Helper loaded: form_helper
INFO - 2017-10-24 18:42:39 --> Database Driver Class Initialized
INFO - 2017-10-24 18:42:39 --> Email Class Initialized
INFO - 2017-10-24 18:42:39 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:42:39 --> Controller Class Initialized
INFO - 2017-10-24 18:42:39 --> Model Class Initialized
DEBUG - 2017-10-24 18:42:39 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 18:42:39 --> Model Class Initialized
DEBUG - 2017-10-24 18:42:39 -->  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' 
DEBUG - 2017-10-24 18:42:39 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a  WHERE  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' order by date,type 
INFO - 2017-10-24 18:42:39 --> Final output sent to browser
DEBUG - 2017-10-24 18:42:39 --> Total execution time: 0.2885
INFO - 2017-10-24 18:42:48 --> Config Class Initialized
INFO - 2017-10-24 18:42:48 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:42:48 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:42:48 --> Utf8 Class Initialized
INFO - 2017-10-24 18:42:48 --> URI Class Initialized
INFO - 2017-10-24 18:42:49 --> Router Class Initialized
INFO - 2017-10-24 18:42:49 --> Output Class Initialized
INFO - 2017-10-24 18:42:49 --> Security Class Initialized
DEBUG - 2017-10-24 18:42:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:42:49 --> Input Class Initialized
INFO - 2017-10-24 18:42:49 --> Language Class Initialized
INFO - 2017-10-24 18:42:49 --> Language Class Initialized
INFO - 2017-10-24 18:42:49 --> Config Class Initialized
INFO - 2017-10-24 18:42:49 --> Loader Class Initialized
INFO - 2017-10-24 18:42:49 --> Helper loaded: url_helper
INFO - 2017-10-24 18:42:49 --> Helper loaded: file_helper
INFO - 2017-10-24 18:42:49 --> Helper loaded: my_helper
INFO - 2017-10-24 18:42:49 --> Helper loaded: form_helper
INFO - 2017-10-24 18:42:49 --> Database Driver Class Initialized
INFO - 2017-10-24 18:42:49 --> Email Class Initialized
INFO - 2017-10-24 18:42:49 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:42:49 --> Controller Class Initialized
INFO - 2017-10-24 18:42:49 --> Model Class Initialized
DEBUG - 2017-10-24 18:42:49 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 18:42:49 --> Model Class Initialized
DEBUG - 2017-10-24 18:42:49 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a order by date,type 
DEBUG - 2017-10-24 18:42:49 --> File loaded: C:\wamp\www\shinexpense\application\modules/setting/models/Setting_model.php
INFO - 2017-10-24 18:42:49 --> Model Class Initialized
DEBUG - 2017-10-24 18:42:49 --> File loaded: C:\wamp\www\shinexpense\application\views\include/menu.php
DEBUG - 2017-10-24 18:42:49 --> File loaded: C:\wamp\www\shinexpense\application\views\include/header.php
DEBUG - 2017-10-24 18:42:49 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/tableData.php
DEBUG - 2017-10-24 18:42:49 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/index.php
DEBUG - 2017-10-24 18:42:49 --> File loaded: C:\wamp\www\shinexpense\application\views\include/footer.php
INFO - 2017-10-24 18:42:49 --> Final output sent to browser
DEBUG - 2017-10-24 18:42:49 --> Total execution time: 0.4375
INFO - 2017-10-24 18:42:49 --> Config Class Initialized
INFO - 2017-10-24 18:42:49 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:42:49 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:42:49 --> Utf8 Class Initialized
INFO - 2017-10-24 18:42:49 --> URI Class Initialized
INFO - 2017-10-24 18:42:49 --> Router Class Initialized
INFO - 2017-10-24 18:42:49 --> Output Class Initialized
INFO - 2017-10-24 18:42:49 --> Security Class Initialized
DEBUG - 2017-10-24 18:42:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:42:49 --> Input Class Initialized
INFO - 2017-10-24 18:42:49 --> Language Class Initialized
INFO - 2017-10-24 18:42:49 --> Language Class Initialized
INFO - 2017-10-24 18:42:49 --> Config Class Initialized
INFO - 2017-10-24 18:42:49 --> Loader Class Initialized
INFO - 2017-10-24 18:42:49 --> Helper loaded: url_helper
INFO - 2017-10-24 18:42:49 --> Helper loaded: file_helper
INFO - 2017-10-24 18:42:49 --> Helper loaded: my_helper
INFO - 2017-10-24 18:42:49 --> Helper loaded: form_helper
INFO - 2017-10-24 18:42:49 --> Database Driver Class Initialized
INFO - 2017-10-24 18:42:50 --> Email Class Initialized
INFO - 2017-10-24 18:42:50 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:42:50 --> Controller Class Initialized
INFO - 2017-10-24 18:42:50 --> Model Class Initialized
DEBUG - 2017-10-24 18:42:50 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 18:42:50 --> Model Class Initialized
DEBUG - 2017-10-24 18:42:50 -->  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' 
DEBUG - 2017-10-24 18:42:50 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a  WHERE  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' order by date,type 
INFO - 2017-10-24 18:42:50 --> Final output sent to browser
DEBUG - 2017-10-24 18:42:50 --> Total execution time: 0.2273
INFO - 2017-10-24 18:43:43 --> Config Class Initialized
INFO - 2017-10-24 18:43:43 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:43:43 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:43:43 --> Utf8 Class Initialized
INFO - 2017-10-24 18:43:43 --> URI Class Initialized
INFO - 2017-10-24 18:43:43 --> Router Class Initialized
INFO - 2017-10-24 18:43:43 --> Output Class Initialized
INFO - 2017-10-24 18:43:43 --> Security Class Initialized
DEBUG - 2017-10-24 18:43:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:43:43 --> Input Class Initialized
INFO - 2017-10-24 18:43:43 --> Language Class Initialized
INFO - 2017-10-24 18:43:43 --> Language Class Initialized
INFO - 2017-10-24 18:43:43 --> Config Class Initialized
INFO - 2017-10-24 18:43:43 --> Loader Class Initialized
INFO - 2017-10-24 18:43:43 --> Helper loaded: url_helper
INFO - 2017-10-24 18:43:43 --> Helper loaded: file_helper
INFO - 2017-10-24 18:43:43 --> Helper loaded: my_helper
INFO - 2017-10-24 18:43:43 --> Helper loaded: form_helper
INFO - 2017-10-24 18:43:43 --> Database Driver Class Initialized
INFO - 2017-10-24 18:43:43 --> Email Class Initialized
INFO - 2017-10-24 18:43:43 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:43:43 --> Controller Class Initialized
INFO - 2017-10-24 18:43:43 --> Model Class Initialized
DEBUG - 2017-10-24 18:43:43 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 18:43:43 --> Model Class Initialized
DEBUG - 2017-10-24 18:43:43 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a order by date,type 
DEBUG - 2017-10-24 18:43:43 --> File loaded: C:\wamp\www\shinexpense\application\modules/setting/models/Setting_model.php
INFO - 2017-10-24 18:43:43 --> Model Class Initialized
DEBUG - 2017-10-24 18:43:43 --> File loaded: C:\wamp\www\shinexpense\application\views\include/menu.php
DEBUG - 2017-10-24 18:43:43 --> File loaded: C:\wamp\www\shinexpense\application\views\include/header.php
DEBUG - 2017-10-24 18:43:43 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/tableData.php
DEBUG - 2017-10-24 18:43:43 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/index.php
DEBUG - 2017-10-24 18:43:43 --> File loaded: C:\wamp\www\shinexpense\application\views\include/footer.php
INFO - 2017-10-24 18:43:43 --> Final output sent to browser
DEBUG - 2017-10-24 18:43:43 --> Total execution time: 0.3600
INFO - 2017-10-24 18:43:44 --> Config Class Initialized
INFO - 2017-10-24 18:43:44 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:43:44 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:43:44 --> Utf8 Class Initialized
INFO - 2017-10-24 18:43:44 --> URI Class Initialized
INFO - 2017-10-24 18:43:44 --> Router Class Initialized
INFO - 2017-10-24 18:43:44 --> Output Class Initialized
INFO - 2017-10-24 18:43:44 --> Security Class Initialized
DEBUG - 2017-10-24 18:43:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:43:44 --> Input Class Initialized
INFO - 2017-10-24 18:43:44 --> Language Class Initialized
INFO - 2017-10-24 18:43:44 --> Language Class Initialized
INFO - 2017-10-24 18:43:44 --> Config Class Initialized
INFO - 2017-10-24 18:43:44 --> Loader Class Initialized
INFO - 2017-10-24 18:43:44 --> Helper loaded: url_helper
INFO - 2017-10-24 18:43:44 --> Helper loaded: file_helper
INFO - 2017-10-24 18:43:44 --> Helper loaded: my_helper
INFO - 2017-10-24 18:43:44 --> Helper loaded: form_helper
INFO - 2017-10-24 18:43:44 --> Database Driver Class Initialized
INFO - 2017-10-24 18:43:44 --> Email Class Initialized
INFO - 2017-10-24 18:43:44 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:43:44 --> Controller Class Initialized
INFO - 2017-10-24 18:43:44 --> Model Class Initialized
DEBUG - 2017-10-24 18:43:44 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 18:43:44 --> Model Class Initialized
DEBUG - 2017-10-24 18:43:44 -->  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' 
DEBUG - 2017-10-24 18:43:44 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a  WHERE  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' order by date,type 
INFO - 2017-10-24 18:43:44 --> Final output sent to browser
DEBUG - 2017-10-24 18:43:44 --> Total execution time: 0.2355
INFO - 2017-10-24 18:45:03 --> Config Class Initialized
INFO - 2017-10-24 18:45:03 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:45:03 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:45:03 --> Utf8 Class Initialized
INFO - 2017-10-24 18:45:03 --> URI Class Initialized
INFO - 2017-10-24 18:45:03 --> Router Class Initialized
INFO - 2017-10-24 18:45:03 --> Output Class Initialized
INFO - 2017-10-24 18:45:03 --> Security Class Initialized
DEBUG - 2017-10-24 18:45:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:45:03 --> Input Class Initialized
INFO - 2017-10-24 18:45:03 --> Language Class Initialized
INFO - 2017-10-24 18:45:03 --> Language Class Initialized
INFO - 2017-10-24 18:45:03 --> Config Class Initialized
INFO - 2017-10-24 18:45:03 --> Loader Class Initialized
INFO - 2017-10-24 18:45:03 --> Helper loaded: url_helper
INFO - 2017-10-24 18:45:03 --> Helper loaded: file_helper
INFO - 2017-10-24 18:45:03 --> Helper loaded: my_helper
INFO - 2017-10-24 18:45:03 --> Helper loaded: form_helper
INFO - 2017-10-24 18:45:03 --> Database Driver Class Initialized
INFO - 2017-10-24 18:45:03 --> Email Class Initialized
INFO - 2017-10-24 18:45:03 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:45:03 --> Controller Class Initialized
INFO - 2017-10-24 18:45:03 --> Model Class Initialized
DEBUG - 2017-10-24 18:45:03 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 18:45:03 --> Model Class Initialized
DEBUG - 2017-10-24 18:45:03 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a order by date,type 
DEBUG - 2017-10-24 18:45:03 --> File loaded: C:\wamp\www\shinexpense\application\modules/setting/models/Setting_model.php
INFO - 2017-10-24 18:45:03 --> Model Class Initialized
DEBUG - 2017-10-24 18:45:03 --> File loaded: C:\wamp\www\shinexpense\application\views\include/menu.php
DEBUG - 2017-10-24 18:45:03 --> File loaded: C:\wamp\www\shinexpense\application\views\include/header.php
DEBUG - 2017-10-24 18:45:03 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/tableData.php
DEBUG - 2017-10-24 18:45:03 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/index.php
DEBUG - 2017-10-24 18:45:03 --> File loaded: C:\wamp\www\shinexpense\application\views\include/footer.php
INFO - 2017-10-24 18:45:03 --> Final output sent to browser
DEBUG - 2017-10-24 18:45:03 --> Total execution time: 0.3725
INFO - 2017-10-24 18:45:04 --> Config Class Initialized
INFO - 2017-10-24 18:45:04 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:45:04 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:45:04 --> Utf8 Class Initialized
INFO - 2017-10-24 18:45:04 --> URI Class Initialized
INFO - 2017-10-24 18:45:04 --> Router Class Initialized
INFO - 2017-10-24 18:45:04 --> Output Class Initialized
INFO - 2017-10-24 18:45:04 --> Security Class Initialized
DEBUG - 2017-10-24 18:45:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:45:04 --> Input Class Initialized
INFO - 2017-10-24 18:45:04 --> Language Class Initialized
INFO - 2017-10-24 18:45:04 --> Language Class Initialized
INFO - 2017-10-24 18:45:04 --> Config Class Initialized
INFO - 2017-10-24 18:45:04 --> Loader Class Initialized
INFO - 2017-10-24 18:45:04 --> Helper loaded: url_helper
INFO - 2017-10-24 18:45:04 --> Helper loaded: file_helper
INFO - 2017-10-24 18:45:04 --> Helper loaded: my_helper
INFO - 2017-10-24 18:45:04 --> Helper loaded: form_helper
INFO - 2017-10-24 18:45:04 --> Database Driver Class Initialized
INFO - 2017-10-24 18:45:04 --> Email Class Initialized
INFO - 2017-10-24 18:45:04 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:45:04 --> Controller Class Initialized
INFO - 2017-10-24 18:45:04 --> Model Class Initialized
DEBUG - 2017-10-24 18:45:04 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 18:45:04 --> Model Class Initialized
DEBUG - 2017-10-24 18:45:04 -->  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' 
DEBUG - 2017-10-24 18:45:04 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a  WHERE  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' order by date,type 
INFO - 2017-10-24 18:45:04 --> Final output sent to browser
DEBUG - 2017-10-24 18:45:04 --> Total execution time: 0.3635
INFO - 2017-10-24 18:45:24 --> Config Class Initialized
INFO - 2017-10-24 18:45:24 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:45:24 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:45:24 --> Utf8 Class Initialized
INFO - 2017-10-24 18:45:24 --> URI Class Initialized
INFO - 2017-10-24 18:45:24 --> Router Class Initialized
INFO - 2017-10-24 18:45:24 --> Output Class Initialized
INFO - 2017-10-24 18:45:24 --> Security Class Initialized
DEBUG - 2017-10-24 18:45:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:45:24 --> Input Class Initialized
INFO - 2017-10-24 18:45:24 --> Language Class Initialized
INFO - 2017-10-24 18:45:24 --> Language Class Initialized
INFO - 2017-10-24 18:45:24 --> Config Class Initialized
INFO - 2017-10-24 18:45:24 --> Loader Class Initialized
INFO - 2017-10-24 18:45:24 --> Helper loaded: url_helper
INFO - 2017-10-24 18:45:24 --> Helper loaded: file_helper
INFO - 2017-10-24 18:45:24 --> Helper loaded: my_helper
INFO - 2017-10-24 18:45:24 --> Helper loaded: form_helper
INFO - 2017-10-24 18:45:24 --> Database Driver Class Initialized
INFO - 2017-10-24 18:45:24 --> Email Class Initialized
INFO - 2017-10-24 18:45:24 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:45:24 --> Controller Class Initialized
INFO - 2017-10-24 18:45:24 --> Model Class Initialized
DEBUG - 2017-10-24 18:45:24 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 18:45:24 --> Model Class Initialized
DEBUG - 2017-10-24 18:45:24 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a order by date,type 
DEBUG - 2017-10-24 18:45:24 --> File loaded: C:\wamp\www\shinexpense\application\modules/setting/models/Setting_model.php
INFO - 2017-10-24 18:45:24 --> Model Class Initialized
DEBUG - 2017-10-24 18:45:24 --> File loaded: C:\wamp\www\shinexpense\application\views\include/menu.php
DEBUG - 2017-10-24 18:45:24 --> File loaded: C:\wamp\www\shinexpense\application\views\include/header.php
DEBUG - 2017-10-24 18:45:24 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/tableData.php
DEBUG - 2017-10-24 18:45:24 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/index.php
DEBUG - 2017-10-24 18:45:24 --> File loaded: C:\wamp\www\shinexpense\application\views\include/footer.php
INFO - 2017-10-24 18:45:24 --> Final output sent to browser
DEBUG - 2017-10-24 18:45:24 --> Total execution time: 0.3825
INFO - 2017-10-24 18:45:24 --> Config Class Initialized
INFO - 2017-10-24 18:45:24 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:45:24 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:45:24 --> Utf8 Class Initialized
INFO - 2017-10-24 18:45:24 --> URI Class Initialized
INFO - 2017-10-24 18:45:24 --> Router Class Initialized
INFO - 2017-10-24 18:45:24 --> Output Class Initialized
INFO - 2017-10-24 18:45:24 --> Security Class Initialized
DEBUG - 2017-10-24 18:45:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:45:24 --> Input Class Initialized
INFO - 2017-10-24 18:45:24 --> Language Class Initialized
INFO - 2017-10-24 18:45:24 --> Language Class Initialized
INFO - 2017-10-24 18:45:24 --> Config Class Initialized
INFO - 2017-10-24 18:45:24 --> Loader Class Initialized
INFO - 2017-10-24 18:45:24 --> Helper loaded: url_helper
INFO - 2017-10-24 18:45:24 --> Helper loaded: file_helper
INFO - 2017-10-24 18:45:24 --> Helper loaded: my_helper
INFO - 2017-10-24 18:45:25 --> Helper loaded: form_helper
INFO - 2017-10-24 18:45:25 --> Database Driver Class Initialized
INFO - 2017-10-24 18:45:25 --> Email Class Initialized
INFO - 2017-10-24 18:45:25 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:45:25 --> Controller Class Initialized
INFO - 2017-10-24 18:45:25 --> Model Class Initialized
DEBUG - 2017-10-24 18:45:25 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 18:45:25 --> Model Class Initialized
DEBUG - 2017-10-24 18:45:25 -->  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' 
DEBUG - 2017-10-24 18:45:25 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a  WHERE  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' order by date,type 
INFO - 2017-10-24 18:45:25 --> Final output sent to browser
DEBUG - 2017-10-24 18:45:25 --> Total execution time: 0.2674
INFO - 2017-10-24 18:45:39 --> Config Class Initialized
INFO - 2017-10-24 18:45:39 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:45:39 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:45:39 --> Utf8 Class Initialized
INFO - 2017-10-24 18:45:39 --> URI Class Initialized
INFO - 2017-10-24 18:45:39 --> Router Class Initialized
INFO - 2017-10-24 18:45:39 --> Output Class Initialized
INFO - 2017-10-24 18:45:39 --> Security Class Initialized
DEBUG - 2017-10-24 18:45:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:45:39 --> Input Class Initialized
INFO - 2017-10-24 18:45:39 --> Language Class Initialized
INFO - 2017-10-24 18:45:39 --> Language Class Initialized
INFO - 2017-10-24 18:45:39 --> Config Class Initialized
INFO - 2017-10-24 18:45:39 --> Loader Class Initialized
INFO - 2017-10-24 18:45:39 --> Helper loaded: url_helper
INFO - 2017-10-24 18:45:39 --> Helper loaded: file_helper
INFO - 2017-10-24 18:45:39 --> Helper loaded: my_helper
INFO - 2017-10-24 18:45:39 --> Helper loaded: form_helper
INFO - 2017-10-24 18:45:39 --> Database Driver Class Initialized
INFO - 2017-10-24 18:45:39 --> Email Class Initialized
INFO - 2017-10-24 18:45:39 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:45:39 --> Controller Class Initialized
INFO - 2017-10-24 18:45:39 --> Model Class Initialized
DEBUG - 2017-10-24 18:45:39 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 18:45:39 --> Model Class Initialized
DEBUG - 2017-10-24 18:45:39 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a order by date,type 
DEBUG - 2017-10-24 18:45:39 --> File loaded: C:\wamp\www\shinexpense\application\modules/setting/models/Setting_model.php
INFO - 2017-10-24 18:45:39 --> Model Class Initialized
DEBUG - 2017-10-24 18:45:39 --> File loaded: C:\wamp\www\shinexpense\application\views\include/menu.php
DEBUG - 2017-10-24 18:45:39 --> File loaded: C:\wamp\www\shinexpense\application\views\include/header.php
DEBUG - 2017-10-24 18:45:39 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/tableData.php
DEBUG - 2017-10-24 18:45:39 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/views/index.php
DEBUG - 2017-10-24 18:45:39 --> File loaded: C:\wamp\www\shinexpense\application\views\include/footer.php
INFO - 2017-10-24 18:45:39 --> Final output sent to browser
DEBUG - 2017-10-24 18:45:39 --> Total execution time: 0.3775
INFO - 2017-10-24 18:45:39 --> Config Class Initialized
INFO - 2017-10-24 18:45:39 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:45:39 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:45:39 --> Utf8 Class Initialized
INFO - 2017-10-24 18:45:39 --> URI Class Initialized
INFO - 2017-10-24 18:45:39 --> Router Class Initialized
INFO - 2017-10-24 18:45:39 --> Output Class Initialized
INFO - 2017-10-24 18:45:39 --> Security Class Initialized
DEBUG - 2017-10-24 18:45:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:45:39 --> Input Class Initialized
INFO - 2017-10-24 18:45:39 --> Language Class Initialized
INFO - 2017-10-24 18:45:39 --> Language Class Initialized
INFO - 2017-10-24 18:45:39 --> Config Class Initialized
INFO - 2017-10-24 18:45:39 --> Loader Class Initialized
INFO - 2017-10-24 18:45:39 --> Helper loaded: url_helper
INFO - 2017-10-24 18:45:39 --> Helper loaded: file_helper
INFO - 2017-10-24 18:45:39 --> Helper loaded: my_helper
INFO - 2017-10-24 18:45:40 --> Helper loaded: form_helper
INFO - 2017-10-24 18:45:40 --> Database Driver Class Initialized
INFO - 2017-10-24 18:45:40 --> Email Class Initialized
INFO - 2017-10-24 18:45:40 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:45:40 --> Controller Class Initialized
INFO - 2017-10-24 18:45:40 --> Model Class Initialized
DEBUG - 2017-10-24 18:45:40 --> File loaded: C:\wamp\www\shinexpense\application\modules/reports/models/Reports_model.php
INFO - 2017-10-24 18:45:40 --> Model Class Initialized
DEBUG - 2017-10-24 18:45:40 -->  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' 
DEBUG - 2017-10-24 18:45:40 --> SELECT * FROM  (SELECT i.date,i.description,ic.category_name,i.amount, 1 type FROM income i INNER JOIN income_category ic ON i.category = ic.income_category_id  UNION SELECT e.date,e.description,ec.category_name,e.amount, 2 type FROM expenses e INNER JOIN expense_category ec ON e.category = ec.expense_category_id ) a  WHERE  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') >= '2017/01/01' AND  DATE_FORMAT(`a`.`date`, '%Y/%m/%d') <= '2017/10/24' order by date,type 
INFO - 2017-10-24 18:45:40 --> Final output sent to browser
DEBUG - 2017-10-24 18:45:40 --> Total execution time: 0.2267
INFO - 2017-10-24 18:46:25 --> Config Class Initialized
INFO - 2017-10-24 18:46:25 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:46:25 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:46:25 --> Utf8 Class Initialized
INFO - 2017-10-24 18:46:25 --> URI Class Initialized
INFO - 2017-10-24 18:46:25 --> Router Class Initialized
INFO - 2017-10-24 18:46:25 --> Output Class Initialized
INFO - 2017-10-24 18:46:25 --> Security Class Initialized
DEBUG - 2017-10-24 18:46:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:46:25 --> Input Class Initialized
INFO - 2017-10-24 18:46:25 --> Language Class Initialized
INFO - 2017-10-24 18:46:25 --> Language Class Initialized
INFO - 2017-10-24 18:46:25 --> Config Class Initialized
INFO - 2017-10-24 18:46:25 --> Loader Class Initialized
INFO - 2017-10-24 18:46:25 --> Helper loaded: url_helper
INFO - 2017-10-24 18:46:25 --> Helper loaded: file_helper
INFO - 2017-10-24 18:46:25 --> Helper loaded: my_helper
INFO - 2017-10-24 18:46:25 --> Helper loaded: form_helper
INFO - 2017-10-24 18:46:25 --> Database Driver Class Initialized
INFO - 2017-10-24 18:46:25 --> Email Class Initialized
INFO - 2017-10-24 18:46:25 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:46:25 --> Controller Class Initialized
INFO - 2017-10-24 18:46:25 --> Model Class Initialized
DEBUG - 2017-10-24 18:46:25 --> File loaded: C:\wamp\www\shinexpense\application\modules/user/models/User_model.php
INFO - 2017-10-24 18:46:25 --> Model Class Initialized
DEBUG - 2017-10-24 18:46:25 --> File loaded: C:\wamp\www\shinexpense\application\modules/setting/models/Setting_model.php
INFO - 2017-10-24 18:46:25 --> Model Class Initialized
DEBUG - 2017-10-24 18:46:25 --> File loaded: C:\wamp\www\shinexpense\application\views\include/menu.php
DEBUG - 2017-10-24 18:46:25 --> File loaded: C:\wamp\www\shinexpense\application\views\include/header.php
DEBUG - 2017-10-24 18:46:25 --> File loaded: C:\wamp\www\shinexpense\application\modules/user/views/profile.php
DEBUG - 2017-10-24 18:46:25 --> File loaded: C:\wamp\www\shinexpense\application\views\include/footer.php
INFO - 2017-10-24 18:46:25 --> Final output sent to browser
DEBUG - 2017-10-24 18:46:25 --> Total execution time: 0.3725
INFO - 2017-10-24 18:47:35 --> Config Class Initialized
INFO - 2017-10-24 18:47:35 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:47:35 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:47:35 --> Utf8 Class Initialized
INFO - 2017-10-24 18:47:35 --> URI Class Initialized
INFO - 2017-10-24 18:47:35 --> Router Class Initialized
INFO - 2017-10-24 18:47:35 --> Output Class Initialized
INFO - 2017-10-24 18:47:35 --> Security Class Initialized
DEBUG - 2017-10-24 18:47:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:47:35 --> Input Class Initialized
INFO - 2017-10-24 18:47:35 --> Language Class Initialized
INFO - 2017-10-24 18:47:35 --> Language Class Initialized
INFO - 2017-10-24 18:47:35 --> Config Class Initialized
INFO - 2017-10-24 18:47:35 --> Loader Class Initialized
INFO - 2017-10-24 18:47:35 --> Helper loaded: url_helper
INFO - 2017-10-24 18:47:35 --> Helper loaded: file_helper
INFO - 2017-10-24 18:47:35 --> Helper loaded: my_helper
INFO - 2017-10-24 18:47:35 --> Helper loaded: form_helper
INFO - 2017-10-24 18:47:35 --> Database Driver Class Initialized
INFO - 2017-10-24 18:47:35 --> Email Class Initialized
INFO - 2017-10-24 18:47:35 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:47:35 --> Controller Class Initialized
INFO - 2017-10-24 18:47:35 --> Model Class Initialized
DEBUG - 2017-10-24 18:47:35 --> File loaded: C:\wamp\www\shinexpense\application\modules/user/models/User_model.php
INFO - 2017-10-24 18:47:35 --> Model Class Initialized
INFO - 2017-10-24 18:47:35 --> Upload Class Initialized
INFO - 2017-10-24 18:47:35 --> Config Class Initialized
INFO - 2017-10-24 18:47:35 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:47:35 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:47:35 --> Utf8 Class Initialized
INFO - 2017-10-24 18:47:35 --> URI Class Initialized
INFO - 2017-10-24 18:47:35 --> Router Class Initialized
INFO - 2017-10-24 18:47:35 --> Output Class Initialized
INFO - 2017-10-24 18:47:35 --> Security Class Initialized
DEBUG - 2017-10-24 18:47:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:47:35 --> Input Class Initialized
INFO - 2017-10-24 18:47:35 --> Language Class Initialized
INFO - 2017-10-24 18:47:35 --> Language Class Initialized
INFO - 2017-10-24 18:47:35 --> Config Class Initialized
INFO - 2017-10-24 18:47:35 --> Loader Class Initialized
INFO - 2017-10-24 18:47:35 --> Helper loaded: url_helper
INFO - 2017-10-24 18:47:35 --> Helper loaded: file_helper
INFO - 2017-10-24 18:47:35 --> Helper loaded: my_helper
INFO - 2017-10-24 18:47:35 --> Helper loaded: form_helper
INFO - 2017-10-24 18:47:35 --> Database Driver Class Initialized
INFO - 2017-10-24 18:47:35 --> Email Class Initialized
INFO - 2017-10-24 18:47:35 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:47:35 --> Controller Class Initialized
INFO - 2017-10-24 18:47:35 --> Model Class Initialized
DEBUG - 2017-10-24 18:47:35 --> File loaded: C:\wamp\www\shinexpense\application\modules/user/models/User_model.php
INFO - 2017-10-24 18:47:35 --> Model Class Initialized
DEBUG - 2017-10-24 18:47:35 --> File loaded: C:\wamp\www\shinexpense\application\modules/setting/models/Setting_model.php
INFO - 2017-10-24 18:47:35 --> Model Class Initialized
DEBUG - 2017-10-24 18:47:35 --> File loaded: C:\wamp\www\shinexpense\application\views\include/menu.php
DEBUG - 2017-10-24 18:47:35 --> File loaded: C:\wamp\www\shinexpense\application\views\include/header.php
DEBUG - 2017-10-24 18:47:35 --> File loaded: C:\wamp\www\shinexpense\application\modules/user/views/profile.php
DEBUG - 2017-10-24 18:47:35 --> File loaded: C:\wamp\www\shinexpense\application\views\include/footer.php
INFO - 2017-10-24 18:47:35 --> Final output sent to browser
DEBUG - 2017-10-24 18:47:35 --> Total execution time: 0.3450
INFO - 2017-10-24 18:47:41 --> Config Class Initialized
INFO - 2017-10-24 18:47:41 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:47:41 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:47:41 --> Utf8 Class Initialized
INFO - 2017-10-24 18:47:41 --> URI Class Initialized
INFO - 2017-10-24 18:47:41 --> Router Class Initialized
INFO - 2017-10-24 18:47:41 --> Output Class Initialized
INFO - 2017-10-24 18:47:41 --> Security Class Initialized
DEBUG - 2017-10-24 18:47:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:47:41 --> Input Class Initialized
INFO - 2017-10-24 18:47:41 --> Language Class Initialized
INFO - 2017-10-24 18:47:41 --> Language Class Initialized
INFO - 2017-10-24 18:47:41 --> Config Class Initialized
INFO - 2017-10-24 18:47:41 --> Loader Class Initialized
INFO - 2017-10-24 18:47:41 --> Helper loaded: url_helper
INFO - 2017-10-24 18:47:41 --> Helper loaded: file_helper
INFO - 2017-10-24 18:47:41 --> Helper loaded: my_helper
INFO - 2017-10-24 18:47:41 --> Helper loaded: form_helper
INFO - 2017-10-24 18:47:41 --> Database Driver Class Initialized
INFO - 2017-10-24 18:47:41 --> Email Class Initialized
INFO - 2017-10-24 18:47:41 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:47:41 --> Controller Class Initialized
INFO - 2017-10-24 18:47:41 --> Model Class Initialized
DEBUG - 2017-10-24 18:47:41 --> File loaded: C:\wamp\www\shinexpense\application\modules/user/models/User_model.php
INFO - 2017-10-24 18:47:41 --> Model Class Initialized
INFO - 2017-10-24 18:47:41 --> Config Class Initialized
INFO - 2017-10-24 18:47:41 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:47:41 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:47:41 --> Utf8 Class Initialized
INFO - 2017-10-24 18:47:41 --> URI Class Initialized
INFO - 2017-10-24 18:47:41 --> Router Class Initialized
INFO - 2017-10-24 18:47:41 --> Output Class Initialized
INFO - 2017-10-24 18:47:41 --> Security Class Initialized
DEBUG - 2017-10-24 18:47:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:47:41 --> Input Class Initialized
INFO - 2017-10-24 18:47:41 --> Language Class Initialized
INFO - 2017-10-24 18:47:41 --> Language Class Initialized
INFO - 2017-10-24 18:47:41 --> Config Class Initialized
INFO - 2017-10-24 18:47:41 --> Loader Class Initialized
INFO - 2017-10-24 18:47:41 --> Helper loaded: url_helper
INFO - 2017-10-24 18:47:41 --> Helper loaded: file_helper
INFO - 2017-10-24 18:47:41 --> Helper loaded: my_helper
INFO - 2017-10-24 18:47:41 --> Helper loaded: form_helper
INFO - 2017-10-24 18:47:41 --> Database Driver Class Initialized
INFO - 2017-10-24 18:47:41 --> Email Class Initialized
INFO - 2017-10-24 18:47:41 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:47:41 --> Controller Class Initialized
INFO - 2017-10-24 18:47:41 --> Model Class Initialized
DEBUG - 2017-10-24 18:47:41 --> File loaded: C:\wamp\www\shinexpense\application\modules/user/models/User_model.php
INFO - 2017-10-24 18:47:41 --> Model Class Initialized
DEBUG - 2017-10-24 18:47:41 --> File loaded: C:\wamp\www\shinexpense\application\views\include/script.php
DEBUG - 2017-10-24 18:47:41 --> File loaded: C:\wamp\www\shinexpense\application\modules/user/views/login.php
INFO - 2017-10-24 18:47:41 --> Final output sent to browser
DEBUG - 2017-10-24 18:47:41 --> Total execution time: 0.2250
INFO - 2017-10-24 18:47:43 --> Config Class Initialized
INFO - 2017-10-24 18:47:43 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:47:43 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:47:43 --> Utf8 Class Initialized
INFO - 2017-10-24 18:47:43 --> URI Class Initialized
INFO - 2017-10-24 18:47:43 --> Router Class Initialized
INFO - 2017-10-24 18:47:43 --> Output Class Initialized
INFO - 2017-10-24 18:47:43 --> Security Class Initialized
DEBUG - 2017-10-24 18:47:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:47:43 --> Input Class Initialized
INFO - 2017-10-24 18:47:43 --> Language Class Initialized
INFO - 2017-10-24 18:47:43 --> Language Class Initialized
INFO - 2017-10-24 18:47:43 --> Config Class Initialized
INFO - 2017-10-24 18:47:43 --> Loader Class Initialized
INFO - 2017-10-24 18:47:43 --> Helper loaded: url_helper
INFO - 2017-10-24 18:47:43 --> Helper loaded: file_helper
INFO - 2017-10-24 18:47:43 --> Helper loaded: my_helper
INFO - 2017-10-24 18:47:43 --> Helper loaded: form_helper
INFO - 2017-10-24 18:47:43 --> Database Driver Class Initialized
INFO - 2017-10-24 18:47:43 --> Email Class Initialized
INFO - 2017-10-24 18:47:43 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:47:43 --> Controller Class Initialized
INFO - 2017-10-24 18:47:43 --> Model Class Initialized
DEBUG - 2017-10-24 18:47:43 --> File loaded: C:\wamp\www\shinexpense\application\modules/user/models/User_model.php
INFO - 2017-10-24 18:47:43 --> Model Class Initialized
INFO - 2017-10-24 18:47:44 --> Config Class Initialized
INFO - 2017-10-24 18:47:44 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:47:44 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:47:44 --> Utf8 Class Initialized
INFO - 2017-10-24 18:47:44 --> URI Class Initialized
INFO - 2017-10-24 18:47:44 --> Router Class Initialized
INFO - 2017-10-24 18:47:44 --> Output Class Initialized
INFO - 2017-10-24 18:47:44 --> Security Class Initialized
DEBUG - 2017-10-24 18:47:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:47:44 --> Input Class Initialized
INFO - 2017-10-24 18:47:44 --> Language Class Initialized
INFO - 2017-10-24 18:47:44 --> Language Class Initialized
INFO - 2017-10-24 18:47:44 --> Config Class Initialized
INFO - 2017-10-24 18:47:44 --> Loader Class Initialized
INFO - 2017-10-24 18:47:44 --> Helper loaded: url_helper
INFO - 2017-10-24 18:47:44 --> Helper loaded: file_helper
INFO - 2017-10-24 18:47:44 --> Helper loaded: my_helper
INFO - 2017-10-24 18:47:44 --> Helper loaded: form_helper
INFO - 2017-10-24 18:47:44 --> Database Driver Class Initialized
INFO - 2017-10-24 18:47:44 --> Email Class Initialized
INFO - 2017-10-24 18:47:44 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:47:44 --> Controller Class Initialized
INFO - 2017-10-24 18:47:44 --> Model Class Initialized
DEBUG - 2017-10-24 18:47:44 --> File loaded: C:\wamp\www\shinexpense\application\modules/dashboard/models/Dashboard_model.php
INFO - 2017-10-24 18:47:44 --> Model Class Initialized
DEBUG - 2017-10-24 18:47:44 --> File loaded: C:\wamp\www\shinexpense\application\modules/setting/models/Setting_model.php
INFO - 2017-10-24 18:47:44 --> Model Class Initialized
DEBUG - 2017-10-24 18:47:44 --> File loaded: C:\wamp\www\shinexpense\application\views\include/menu.php
DEBUG - 2017-10-24 18:47:44 --> File loaded: C:\wamp\www\shinexpense\application\views\include/header.php
DEBUG - 2017-10-24 18:47:44 --> File loaded: C:\wamp\www\shinexpense\application\modules/dashboard/views/index.php
DEBUG - 2017-10-24 18:47:44 --> File loaded: C:\wamp\www\shinexpense\application\views\include/footer.php
INFO - 2017-10-24 18:47:44 --> Final output sent to browser
DEBUG - 2017-10-24 18:47:44 --> Total execution time: 0.3825
INFO - 2017-10-24 18:47:47 --> Config Class Initialized
INFO - 2017-10-24 18:47:47 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:47:47 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:47:47 --> Utf8 Class Initialized
INFO - 2017-10-24 18:47:47 --> URI Class Initialized
INFO - 2017-10-24 18:47:47 --> Router Class Initialized
INFO - 2017-10-24 18:47:47 --> Output Class Initialized
INFO - 2017-10-24 18:47:47 --> Security Class Initialized
DEBUG - 2017-10-24 18:47:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:47:47 --> Input Class Initialized
INFO - 2017-10-24 18:47:47 --> Language Class Initialized
INFO - 2017-10-24 18:47:47 --> Language Class Initialized
INFO - 2017-10-24 18:47:47 --> Config Class Initialized
INFO - 2017-10-24 18:47:47 --> Loader Class Initialized
INFO - 2017-10-24 18:47:47 --> Helper loaded: url_helper
INFO - 2017-10-24 18:47:47 --> Helper loaded: file_helper
INFO - 2017-10-24 18:47:47 --> Helper loaded: my_helper
INFO - 2017-10-24 18:47:47 --> Helper loaded: form_helper
INFO - 2017-10-24 18:47:47 --> Database Driver Class Initialized
INFO - 2017-10-24 18:47:48 --> Email Class Initialized
INFO - 2017-10-24 18:47:48 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:47:48 --> Controller Class Initialized
INFO - 2017-10-24 18:47:48 --> Model Class Initialized
DEBUG - 2017-10-24 18:47:48 --> File loaded: C:\wamp\www\shinexpense\application\modules/dashboard/models/Dashboard_model.php
INFO - 2017-10-24 18:47:48 --> Model Class Initialized
INFO - 2017-10-24 18:47:48 --> Final output sent to browser
DEBUG - 2017-10-24 18:47:48 --> Total execution time: 0.1935
INFO - 2017-10-24 18:47:50 --> Config Class Initialized
INFO - 2017-10-24 18:47:50 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:47:50 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:47:50 --> Utf8 Class Initialized
INFO - 2017-10-24 18:47:50 --> URI Class Initialized
INFO - 2017-10-24 18:47:50 --> Router Class Initialized
INFO - 2017-10-24 18:47:50 --> Output Class Initialized
INFO - 2017-10-24 18:47:50 --> Security Class Initialized
DEBUG - 2017-10-24 18:47:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:47:50 --> Input Class Initialized
INFO - 2017-10-24 18:47:50 --> Language Class Initialized
INFO - 2017-10-24 18:47:50 --> Language Class Initialized
INFO - 2017-10-24 18:47:50 --> Config Class Initialized
INFO - 2017-10-24 18:47:50 --> Loader Class Initialized
INFO - 2017-10-24 18:47:50 --> Helper loaded: url_helper
INFO - 2017-10-24 18:47:50 --> Helper loaded: file_helper
INFO - 2017-10-24 18:47:50 --> Helper loaded: my_helper
INFO - 2017-10-24 18:47:50 --> Helper loaded: form_helper
INFO - 2017-10-24 18:47:51 --> Database Driver Class Initialized
INFO - 2017-10-24 18:47:51 --> Email Class Initialized
INFO - 2017-10-24 18:47:51 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:47:51 --> Controller Class Initialized
INFO - 2017-10-24 18:47:51 --> Model Class Initialized
DEBUG - 2017-10-24 18:47:51 --> File loaded: C:\wamp\www\shinexpense\application\modules/dashboard/models/Dashboard_model.php
INFO - 2017-10-24 18:47:51 --> Model Class Initialized
INFO - 2017-10-24 18:47:51 --> Final output sent to browser
DEBUG - 2017-10-24 18:47:51 --> Total execution time: 0.2298
INFO - 2017-10-24 18:47:53 --> Config Class Initialized
INFO - 2017-10-24 18:47:53 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:47:53 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:47:53 --> Utf8 Class Initialized
INFO - 2017-10-24 18:47:53 --> URI Class Initialized
INFO - 2017-10-24 18:47:53 --> Router Class Initialized
INFO - 2017-10-24 18:47:53 --> Output Class Initialized
INFO - 2017-10-24 18:47:53 --> Security Class Initialized
DEBUG - 2017-10-24 18:47:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:47:53 --> Input Class Initialized
INFO - 2017-10-24 18:47:54 --> Language Class Initialized
INFO - 2017-10-24 18:47:54 --> Language Class Initialized
INFO - 2017-10-24 18:47:54 --> Config Class Initialized
INFO - 2017-10-24 18:47:54 --> Loader Class Initialized
INFO - 2017-10-24 18:47:54 --> Helper loaded: url_helper
INFO - 2017-10-24 18:47:54 --> Helper loaded: file_helper
INFO - 2017-10-24 18:47:54 --> Helper loaded: my_helper
INFO - 2017-10-24 18:47:54 --> Helper loaded: form_helper
INFO - 2017-10-24 18:47:54 --> Database Driver Class Initialized
INFO - 2017-10-24 18:47:54 --> Email Class Initialized
INFO - 2017-10-24 18:47:54 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:47:54 --> Controller Class Initialized
INFO - 2017-10-24 18:47:54 --> Model Class Initialized
DEBUG - 2017-10-24 18:47:54 --> File loaded: C:\wamp\www\shinexpense\application\modules/dashboard/models/Dashboard_model.php
INFO - 2017-10-24 18:47:54 --> Model Class Initialized
INFO - 2017-10-24 18:47:54 --> Final output sent to browser
DEBUG - 2017-10-24 18:47:54 --> Total execution time: 0.3150
INFO - 2017-10-24 18:47:56 --> Config Class Initialized
INFO - 2017-10-24 18:47:56 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:47:56 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:47:56 --> Utf8 Class Initialized
INFO - 2017-10-24 18:47:56 --> URI Class Initialized
INFO - 2017-10-24 18:47:56 --> Router Class Initialized
INFO - 2017-10-24 18:47:56 --> Output Class Initialized
INFO - 2017-10-24 18:47:56 --> Security Class Initialized
DEBUG - 2017-10-24 18:47:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:47:56 --> Input Class Initialized
INFO - 2017-10-24 18:47:56 --> Language Class Initialized
INFO - 2017-10-24 18:47:56 --> Language Class Initialized
INFO - 2017-10-24 18:47:56 --> Config Class Initialized
INFO - 2017-10-24 18:47:56 --> Loader Class Initialized
INFO - 2017-10-24 18:47:56 --> Helper loaded: url_helper
INFO - 2017-10-24 18:47:56 --> Helper loaded: file_helper
INFO - 2017-10-24 18:47:56 --> Helper loaded: my_helper
INFO - 2017-10-24 18:47:56 --> Helper loaded: form_helper
INFO - 2017-10-24 18:47:56 --> Database Driver Class Initialized
INFO - 2017-10-24 18:47:56 --> Email Class Initialized
INFO - 2017-10-24 18:47:56 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:47:56 --> Controller Class Initialized
INFO - 2017-10-24 18:47:56 --> Model Class Initialized
DEBUG - 2017-10-24 18:47:56 --> File loaded: C:\wamp\www\shinexpense\application\modules/user/models/User_model.php
INFO - 2017-10-24 18:47:56 --> Model Class Initialized
DEBUG - 2017-10-24 18:47:56 --> File loaded: C:\wamp\www\shinexpense\application\modules/setting/models/Setting_model.php
INFO - 2017-10-24 18:47:56 --> Model Class Initialized
INFO - 2017-10-24 18:47:56 --> Config Class Initialized
INFO - 2017-10-24 18:47:56 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:47:56 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:47:56 --> Utf8 Class Initialized
INFO - 2017-10-24 18:47:56 --> URI Class Initialized
INFO - 2017-10-24 18:47:56 --> Router Class Initialized
INFO - 2017-10-24 18:47:56 --> Output Class Initialized
INFO - 2017-10-24 18:47:56 --> Security Class Initialized
DEBUG - 2017-10-24 18:47:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:47:56 --> Input Class Initialized
INFO - 2017-10-24 18:47:56 --> Language Class Initialized
INFO - 2017-10-24 18:47:56 --> Language Class Initialized
INFO - 2017-10-24 18:47:56 --> Config Class Initialized
INFO - 2017-10-24 18:47:56 --> Loader Class Initialized
INFO - 2017-10-24 18:47:56 --> Helper loaded: url_helper
INFO - 2017-10-24 18:47:56 --> Helper loaded: file_helper
DEBUG - 2017-10-24 18:47:57 --> File loaded: C:\wamp\www\shinexpense\application\views\include/menu.php
INFO - 2017-10-24 18:47:57 --> Helper loaded: my_helper
DEBUG - 2017-10-24 18:47:57 --> File loaded: C:\wamp\www\shinexpense\application\views\include/header.php
INFO - 2017-10-24 18:47:57 --> Helper loaded: form_helper
DEBUG - 2017-10-24 18:47:57 --> File loaded: C:\wamp\www\shinexpense\application\modules/user/views/profile.php
INFO - 2017-10-24 18:47:57 --> Database Driver Class Initialized
DEBUG - 2017-10-24 18:47:57 --> File loaded: C:\wamp\www\shinexpense\application\views\include/footer.php
INFO - 2017-10-24 18:47:57 --> Final output sent to browser
DEBUG - 2017-10-24 18:47:57 --> Total execution time: 0.4450
INFO - 2017-10-24 18:47:57 --> Email Class Initialized
INFO - 2017-10-24 18:47:57 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:47:57 --> Controller Class Initialized
INFO - 2017-10-24 18:47:57 --> Model Class Initialized
DEBUG - 2017-10-24 18:47:57 --> File loaded: C:\wamp\www\shinexpense\application\modules/dashboard/models/Dashboard_model.php
INFO - 2017-10-24 18:47:57 --> Model Class Initialized
INFO - 2017-10-24 18:47:57 --> Final output sent to browser
DEBUG - 2017-10-24 18:47:57 --> Total execution time: 0.3525
INFO - 2017-10-24 18:48:10 --> Config Class Initialized
INFO - 2017-10-24 18:48:10 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:48:10 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:48:10 --> Utf8 Class Initialized
INFO - 2017-10-24 18:48:10 --> URI Class Initialized
INFO - 2017-10-24 18:48:10 --> Router Class Initialized
INFO - 2017-10-24 18:48:10 --> Output Class Initialized
INFO - 2017-10-24 18:48:10 --> Security Class Initialized
DEBUG - 2017-10-24 18:48:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:48:10 --> Input Class Initialized
INFO - 2017-10-24 18:48:10 --> Language Class Initialized
INFO - 2017-10-24 18:48:10 --> Language Class Initialized
INFO - 2017-10-24 18:48:10 --> Config Class Initialized
INFO - 2017-10-24 18:48:10 --> Loader Class Initialized
INFO - 2017-10-24 18:48:10 --> Helper loaded: url_helper
INFO - 2017-10-24 18:48:10 --> Helper loaded: file_helper
INFO - 2017-10-24 18:48:10 --> Helper loaded: my_helper
INFO - 2017-10-24 18:48:10 --> Helper loaded: form_helper
INFO - 2017-10-24 18:48:10 --> Database Driver Class Initialized
INFO - 2017-10-24 18:48:10 --> Email Class Initialized
INFO - 2017-10-24 18:48:10 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:48:10 --> Controller Class Initialized
INFO - 2017-10-24 18:48:10 --> Model Class Initialized
DEBUG - 2017-10-24 18:48:10 --> File loaded: C:\wamp\www\shinexpense\application\modules/notes_category/models/Notes_category_model.php
INFO - 2017-10-24 18:48:10 --> Model Class Initialized
DEBUG - 2017-10-24 18:48:10 --> File loaded: C:\wamp\www\shinexpense\application\modules/setting/models/Setting_model.php
INFO - 2017-10-24 18:48:10 --> Model Class Initialized
DEBUG - 2017-10-24 18:48:10 --> File loaded: C:\wamp\www\shinexpense\application\views\include/menu.php
DEBUG - 2017-10-24 18:48:10 --> File loaded: C:\wamp\www\shinexpense\application\views\include/header.php
DEBUG - 2017-10-24 18:48:10 --> File loaded: C:\wamp\www\shinexpense\application\modules/notes_category/views/tableData.php
DEBUG - 2017-10-24 18:48:10 --> File loaded: C:\wamp\www\shinexpense\application\modules/notes_category/views/index.php
DEBUG - 2017-10-24 18:48:10 --> File loaded: C:\wamp\www\shinexpense\application\views\include/footer.php
INFO - 2017-10-24 18:48:10 --> Final output sent to browser
DEBUG - 2017-10-24 18:48:10 --> Total execution time: 0.3600
INFO - 2017-10-24 18:48:12 --> Config Class Initialized
INFO - 2017-10-24 18:48:12 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:48:12 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:48:12 --> Utf8 Class Initialized
INFO - 2017-10-24 18:48:12 --> URI Class Initialized
INFO - 2017-10-24 18:48:12 --> Router Class Initialized
INFO - 2017-10-24 18:48:12 --> Output Class Initialized
INFO - 2017-10-24 18:48:12 --> Security Class Initialized
DEBUG - 2017-10-24 18:48:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:48:12 --> Input Class Initialized
INFO - 2017-10-24 18:48:12 --> Language Class Initialized
INFO - 2017-10-24 18:48:12 --> Language Class Initialized
INFO - 2017-10-24 18:48:12 --> Config Class Initialized
INFO - 2017-10-24 18:48:12 --> Loader Class Initialized
INFO - 2017-10-24 18:48:12 --> Helper loaded: url_helper
INFO - 2017-10-24 18:48:12 --> Helper loaded: file_helper
INFO - 2017-10-24 18:48:12 --> Helper loaded: my_helper
INFO - 2017-10-24 18:48:12 --> Helper loaded: form_helper
INFO - 2017-10-24 18:48:12 --> Database Driver Class Initialized
INFO - 2017-10-24 18:48:12 --> Email Class Initialized
INFO - 2017-10-24 18:48:12 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:48:12 --> Controller Class Initialized
INFO - 2017-10-24 18:48:12 --> Model Class Initialized
DEBUG - 2017-10-24 18:48:12 --> File loaded: C:\wamp\www\shinexpense\application\modules/income/models/Income_model.php
INFO - 2017-10-24 18:48:12 --> Model Class Initialized
DEBUG - 2017-10-24 18:48:12 --> File loaded: C:\wamp\www\shinexpense\application\modules/setting/models/Setting_model.php
INFO - 2017-10-24 18:48:12 --> Model Class Initialized
DEBUG - 2017-10-24 18:48:12 --> File loaded: C:\wamp\www\shinexpense\application\views\include/menu.php
DEBUG - 2017-10-24 18:48:12 --> File loaded: C:\wamp\www\shinexpense\application\views\include/header.php
DEBUG - 2017-10-24 18:48:12 --> File loaded: C:\wamp\www\shinexpense\application\modules/income/views/tableData.php
DEBUG - 2017-10-24 18:48:12 --> File loaded: C:\wamp\www\shinexpense\application\modules/income/views/index.php
DEBUG - 2017-10-24 18:48:12 --> File loaded: C:\wamp\www\shinexpense\application\views\include/footer.php
INFO - 2017-10-24 18:48:12 --> Final output sent to browser
DEBUG - 2017-10-24 18:48:12 --> Total execution time: 0.5750
INFO - 2017-10-24 18:48:13 --> Config Class Initialized
INFO - 2017-10-24 18:48:13 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:48:13 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:48:13 --> Utf8 Class Initialized
INFO - 2017-10-24 18:48:13 --> URI Class Initialized
INFO - 2017-10-24 18:48:13 --> Router Class Initialized
INFO - 2017-10-24 18:48:13 --> Output Class Initialized
INFO - 2017-10-24 18:48:13 --> Security Class Initialized
DEBUG - 2017-10-24 18:48:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:48:13 --> Input Class Initialized
INFO - 2017-10-24 18:48:13 --> Language Class Initialized
INFO - 2017-10-24 18:48:13 --> Language Class Initialized
INFO - 2017-10-24 18:48:13 --> Config Class Initialized
INFO - 2017-10-24 18:48:13 --> Loader Class Initialized
INFO - 2017-10-24 18:48:13 --> Helper loaded: url_helper
INFO - 2017-10-24 18:48:13 --> Helper loaded: file_helper
INFO - 2017-10-24 18:48:13 --> Helper loaded: my_helper
INFO - 2017-10-24 18:48:13 --> Helper loaded: form_helper
INFO - 2017-10-24 18:48:13 --> Database Driver Class Initialized
INFO - 2017-10-24 18:48:13 --> Email Class Initialized
INFO - 2017-10-24 18:48:13 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:48:13 --> Controller Class Initialized
INFO - 2017-10-24 18:48:13 --> Model Class Initialized
DEBUG - 2017-10-24 18:48:13 --> File loaded: C:\wamp\www\shinexpense\application\modules/income/models/Income_model.php
INFO - 2017-10-24 18:48:13 --> Model Class Initialized
DEBUG - 2017-10-24 18:48:13 --> File loaded: C:\wamp\www\shinexpense\application\modules/income/views/tableData.php
INFO - 2017-10-24 18:48:20 --> Config Class Initialized
INFO - 2017-10-24 18:48:20 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:48:20 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:48:20 --> Utf8 Class Initialized
INFO - 2017-10-24 18:48:20 --> URI Class Initialized
INFO - 2017-10-24 18:48:20 --> Router Class Initialized
INFO - 2017-10-24 18:48:20 --> Output Class Initialized
INFO - 2017-10-24 18:48:20 --> Security Class Initialized
DEBUG - 2017-10-24 18:48:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:48:20 --> Input Class Initialized
INFO - 2017-10-24 18:48:20 --> Language Class Initialized
INFO - 2017-10-24 18:48:20 --> Language Class Initialized
INFO - 2017-10-24 18:48:20 --> Config Class Initialized
INFO - 2017-10-24 18:48:20 --> Loader Class Initialized
INFO - 2017-10-24 18:48:20 --> Helper loaded: url_helper
INFO - 2017-10-24 18:48:20 --> Helper loaded: file_helper
INFO - 2017-10-24 18:48:20 --> Helper loaded: my_helper
INFO - 2017-10-24 18:48:20 --> Helper loaded: form_helper
INFO - 2017-10-24 18:48:20 --> Database Driver Class Initialized
INFO - 2017-10-24 18:48:20 --> Email Class Initialized
INFO - 2017-10-24 18:48:20 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:48:20 --> Controller Class Initialized
INFO - 2017-10-24 18:48:20 --> Model Class Initialized
DEBUG - 2017-10-24 18:48:20 --> File loaded: C:\wamp\www\shinexpense\application\modules/notes/models/Notes_model.php
INFO - 2017-10-24 18:48:20 --> Model Class Initialized
DEBUG - 2017-10-24 18:48:20 --> File loaded: C:\wamp\www\shinexpense\application\modules/setting/models/Setting_model.php
INFO - 2017-10-24 18:48:20 --> Model Class Initialized
DEBUG - 2017-10-24 18:48:20 --> File loaded: C:\wamp\www\shinexpense\application\views\include/menu.php
DEBUG - 2017-10-24 18:48:20 --> File loaded: C:\wamp\www\shinexpense\application\views\include/header.php
DEBUG - 2017-10-24 18:48:20 --> File loaded: C:\wamp\www\shinexpense\application\modules/notes/views/tableData.php
DEBUG - 2017-10-24 18:48:20 --> File loaded: C:\wamp\www\shinexpense\application\modules/notes/views/index.php
DEBUG - 2017-10-24 18:48:20 --> File loaded: C:\wamp\www\shinexpense\application\views\include/footer.php
INFO - 2017-10-24 18:48:20 --> Final output sent to browser
DEBUG - 2017-10-24 18:48:20 --> Total execution time: 0.3450
INFO - 2017-10-24 18:49:47 --> Config Class Initialized
INFO - 2017-10-24 18:49:47 --> Hooks Class Initialized
DEBUG - 2017-10-24 18:49:47 --> UTF-8 Support Enabled
INFO - 2017-10-24 18:49:47 --> Utf8 Class Initialized
INFO - 2017-10-24 18:49:47 --> URI Class Initialized
INFO - 2017-10-24 18:49:47 --> Router Class Initialized
INFO - 2017-10-24 18:49:47 --> Output Class Initialized
INFO - 2017-10-24 18:49:47 --> Security Class Initialized
DEBUG - 2017-10-24 18:49:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2017-10-24 18:49:47 --> Input Class Initialized
INFO - 2017-10-24 18:49:47 --> Language Class Initialized
INFO - 2017-10-24 18:49:47 --> Language Class Initialized
INFO - 2017-10-24 18:49:47 --> Config Class Initialized
INFO - 2017-10-24 18:49:47 --> Loader Class Initialized
INFO - 2017-10-24 18:49:47 --> Helper loaded: url_helper
INFO - 2017-10-24 18:49:47 --> Helper loaded: file_helper
INFO - 2017-10-24 18:49:47 --> Helper loaded: my_helper
INFO - 2017-10-24 18:49:47 --> Helper loaded: form_helper
INFO - 2017-10-24 18:49:47 --> Database Driver Class Initialized
INFO - 2017-10-24 18:49:47 --> Email Class Initialized
INFO - 2017-10-24 18:49:47 --> Session: Class initialized using 'files' driver.
INFO - 2017-10-24 18:49:47 --> Controller Class Initialized
INFO - 2017-10-24 18:49:47 --> Model Class Initialized
DEBUG - 2017-10-24 18:49:47 --> File loaded: C:\wamp\www\shinexpense\application\modules/notes/models/Notes_model.php
INFO - 2017-10-24 18:49:47 --> Model Class Initialized
DEBUG - 2017-10-24 18:49:47 --> File loaded: C:\wamp\www\shinexpense\application\modules/setting/models/Setting_model.php
INFO - 2017-10-24 18:49:47 --> Model Class Initialized
DEBUG - 2017-10-24 18:49:47 --> File loaded: C:\wamp\www\shinexpense\application\views\include/menu.php
DEBUG - 2017-10-24 18:49:47 --> File loaded: C:\wamp\www\shinexpense\application\views\include/header.php
DEBUG - 2017-10-24 18:49:47 --> File loaded: C:\wamp\www\shinexpense\application\modules/notes/views/tableData.php
DEBUG - 2017-10-24 18:49:47 --> File loaded: C:\wamp\www\shinexpense\application\modules/notes/views/index.php
DEBUG - 2017-10-24 18:49:47 --> File loaded: C:\wamp\www\shinexpense\application\views\include/footer.php
INFO - 2017-10-24 18:49:47 --> Final output sent to browser
DEBUG - 2017-10-24 18:49:47 --> Total execution time: 0.4200
