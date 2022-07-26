--
-- Database: `chart`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_marks`
--

CREATE TABLE `tbl_marks` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `student_name` varchar(35) NOT NULL,
  `marks` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_marks`
--

INSERT INTO `tbl_marks` (`student_id`, `student_name`, `marks`) VALUES
(1, 'Hulk', 40),
(2, 'Iron Man', 76),
(3, 'Strange', 56),
(4, 'Wakanda', 99),
(5, 'Henry', 98);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_marks`
--
ALTER TABLE `tbl_marks`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_marks`
--
ALTER TABLE `tbl_marks`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
