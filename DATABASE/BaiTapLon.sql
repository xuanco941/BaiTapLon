create database baitaplon 

use baitaplon

create table nhanvien 
(	
ID int primary key,
Username nvarchar(20),
tennv nvarchar(40),
SDT nvarchar(20),
PassNV nvarchar(20),
diachi nvarchar(40),
quyen nvarchar(40)
)
insert into nhanvien values 
('1','quangtu',N'Nguyễn Quang Tú','0335100852','quangtu1',N'Hà Nội',N'Người dùng'),
('2','hungduong',N'Đoàn Hùng Dương','032132132','hungduong1',N'Hà Đông','admin'),
('3','tuan',N'Trần Văn Tuấn','033213213','vantuan1',N'Mê Linh','nhân viên');

select * from nhanvien

create table Trasach(
id_nv int,
ngayTra date,
id_S int,
ghichu nvarchar(40)
)
alter table trasach
add constraint fk_traS foreign key (id_nv) REFERENCES nhanvien(id)

insert into Trasach 
values 
('1','2021-04-10','01','muon 1 ngay'),
('2','2022-03-11','02','sach hu'),
('2','2023-05-12','03','sach hay');

create table Muon(
id_nm int,
id_nv int,
id_muon int primary key,
ngayM date,
ghichu nvarchar(40)
)
insert into Muon values
('1','1','1','2021-02-10','done'),
('2','2','2','2021-04-11','wait')
create table danhsachM(
id_S int,
id_muon int,
FOREIGN KEY (id_muon) REFERENCES muon(id_muon))

insert into danhsachM values
('01','1'),
('02','2')
create table sach(
id int primary key,
LoaiS nvarchar(40),
MaS nvarchar(40),
FOREIGN KEY (LoaiS) REFERENCES Loaisach(LoaiS)
)
insert into sach values 
('4',N'Lịch Sử','LS1'),
('5',N'Toán Học','T2'),
('6',N'Văn Học','VH3');
create table Loaisach (
LoaiS nvarchar(40) primary key,
TenS nvarchar(40),
NXB nvarchar(40),
NamXB nvarchar(40),
GiaSach float (20)
)
insert into Loaisach values
(N'Tiếng anh',N'english',N'Kim Đồng',N'1975','50000'),
(N'Học tốt',N'Học tốt hơn mỗi ngày',N'Thủy Lợi','1999','100000'),
(N'Sinh học',N'Sinh học',N'NSB Giáo dục',N'1995','80000');
create table NguoiM(
id int primary key,
MaNM nvarchar(40),
TenNM nvarchar(40),
Gioitinh bit,
ngaysinh date,
khoa nvarchar(40),
diachi nvarchar(40),
ghichu nvarchar(40),
DongPhi bit
)
insert into NguoiM values 
('1','NM1',N'Nguyễn Văn Chi','1','1999-02-01','K61',N'Hà Nội',N'sạch sẽ','0'),
('2','NM2',N'Chu Thị Tươi','0','2001-04-04','K65',N'Hà Tây',N'sách có vết rách','1'),
('3','NM3',N'Trần Văn Tuấn','1','2001-05-05','K66',N'Hà Đông',N'mất sách','0');
alter table Trasach 
add constraint fk_traS2 foreign key (id_S) REFERENCES sach(id)
alter table danhsachM
add constraint fk_dsM foreign key (id_S) REFERENCES sach(id)
alter table Muon
add constraint fk_Muon foreign key (id_nv) REFERENCES nhanvien(id)
alter table Muon
add constraint fk_Muon2 foreign key (id_nm) REFERENCES nguoiM(id)

create table lichsu(
Id_NV_M int,
id_NV_T int,
id_muon int,
id_S int ,
NgayM date,
NgayTra date,
GhichuM nvarchar(40),
GhichuT nvarchar(40),
id_NM int,
id_lichsu int
)
insert into lichsu values 
('1','1','2','1','2021-09-10','2021-10-10',N'sách nguyên vẹn',N'sách bị ẩm','1','01'),
('2','2','3','2','2021-01-01','2021-02-01',N'sách nguyên vẹn',N'sách nguyên vẹn','2','02')


select * from danhsachM
select * from lichsu
select * from Loaisach
select * from Muon
select * from NguoiM
select * from nhanvien
select * from sach
select * from Trasach

