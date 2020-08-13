                              SQL COMANDALARI:



1. CREATE DATABASE test = test bazasi yaratildi.

2. CREATE TABLE users(id integer PRIMARY KEY AUTO_INCREMENT,
                   ism varchar(50),
                   parol varchar(50))== users jadvali yaratildi
                    
                    integer = son, PRIMARY KEY = TAKRORLANMAS, AUTO_INCREMENT = O'sib borish  tartibida   varchar()= string


3. DROP TABLE users = users jadvali o'chirildi

4. INSERT INTO users (ism,parol) VALUES ('salom','123') = jadvalga malumot joylandi

5. UPDATE users SET ism='komron',parol='321' WHERE id=1    = jadvaldagi ma'lumot o'zgartirildi

6. DELETE FROM users WHERE id=1 = jadvaldan maumot o'chirildi 

7. SELECT * FROM users =  jadvaldagi barcha malumotlar tanlandi

8. SELECT ism FROM users =jadvaldagi barcha ismlar tanlandi

9. SELECT COUNT(id) FROM users = jadvaldagi qatorlar soni id orqali aniqlandi

10. SELECT SUM(id) FROM users = jadvaldagi id larning o'rtacha qiymati

SELECT AVG(id) FROM users = jadvaldagi id larning o'rtacha qiymati = O'RTA QIYMAT

11. SELECT * FROM users WHERE id BETWEEN 1 AND 7           =id si  1  dan 7 gacha bo'lgan malumotlar olindi

12. SELECT * FROM TAKRORLASH ORDER BY lastname = takrorlash jadvalidagi  lastname lar sort qilib olindi

13. SELECT * FROM TAKRORLASH ORDER BY lastname DESC =  takrorlash jadvalidagi  lastname lar teskarisiga  sort qilib olindi

14. SELECT * FROM TAKRORLASH ORDER BY lastname ASC = a dan z  gacha sort qilindi

15. ALTER TABLE users ADD email varchar(50) =  jadvalga yangi ustun qo'shildi  -> thead

16. ALTER TABLE users MODIFY COLUMN email int(10) = email ning typi string dan intga o'zgardi  

17. ALTER TABLE users DROP email = jadvaldan email ustuni o'chirildi

18. SELECT * FROM users AS yu INNER JOIN users2 AS yu2 ON yu.id=yu2.oddiy_id = 2 ta jadval birlashtirildi

19. SELECT * FROM users AS yu RIGHT JOIN users2 AS yu2 ON yu.id=yu2.oddiy_id = o'ng tarafdagi jadvalga birlashdi

20. SELECT * FROM users AS yu LEFT JOIN users2 AS yu2 ON yu.id=yu2.oddiy_id = chap tarafdagi jadvalga birlashdi

21. 



   
