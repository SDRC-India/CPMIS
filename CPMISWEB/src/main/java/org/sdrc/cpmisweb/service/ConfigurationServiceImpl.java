package org.sdrc.cpmisweb.service;

import java.io.File;
import java.io.FileInputStream;
import java.io.IOException;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.time.Month;
import java.time.Year;
import java.util.Iterator;

import org.apache.poi.openxml4j.exceptions.InvalidFormatException;
import org.apache.poi.ss.usermodel.Cell;
import org.apache.poi.xssf.usermodel.XSSFRow;
import org.apache.poi.xssf.usermodel.XSSFSheet;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;
//import org.sdrc.cpmisweb.domain.Agency;
import org.sdrc.cpmisweb.domain.Area;
import org.sdrc.cpmisweb.domain.Data;
import org.sdrc.cpmisweb.domain.Indicator;
import org.sdrc.cpmisweb.domain.IndicatorClassification;
import org.sdrc.cpmisweb.domain.IndicatorClassificationIndicatorUnitSubgroupMapping;
import org.sdrc.cpmisweb.domain.IndicatorUnitSubgroup;
import org.sdrc.cpmisweb.domain.Subgroup;
import org.sdrc.cpmisweb.domain.Timeperiod;
import org.sdrc.cpmisweb.domain.Unit;
import org.sdrc.cpmisweb.repository.AreaRepository;
import org.sdrc.cpmisweb.repository.DataEntryRepository;
import org.sdrc.cpmisweb.repository.IndicatorClassificationRepository;
import org.sdrc.cpmisweb.repository.IndicatorClassification_Ius_Mapping_Repository;
import org.sdrc.cpmisweb.repository.IndicatorRepository;
import org.sdrc.cpmisweb.repository.IndicatorUnitSubgroupRepository;
import org.sdrc.cpmisweb.repository.SubgroupRepository;
import org.sdrc.cpmisweb.repository.TimePeriodRepository;
import org.sdrc.cpmisweb.repository.UnitRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

@Service
public class ConfigurationServiceImpl implements ConfigurationService {

	@Autowired
	private IndicatorUnitSubgroupRepository indicatorUnitSubgroupRepository;

	@Autowired
	private IndicatorRepository indicatorRepository;

	@Autowired
	private IndicatorClassificationRepository indicatorClassificationRepository;

	@Autowired
	private IndicatorClassification_Ius_Mapping_Repository indicatorClassification_Ius_Mapping_Repository;

	@Autowired
	private SubgroupRepository subgroupRepository;
	@Autowired
	private UnitRepository unitRepository;

	@Autowired
	private DataEntryRepository dataEntryRepository;

	@Autowired
	private TimePeriodRepository timePeriodRepository;
	@Autowired
	private AreaRepository areaRepository;
	@SuppressWarnings("resource")
	@Override
	@Transactional
	public boolean readAndInsertDataFromExcelFileForAgency() throws InvalidFormatException, IOException {
		File file = new File("D:\\TestData\\Assam_SCPS_Excel_Template_r1 - Copy prod.xlsx");

		XSSFWorkbook workbook = new XSSFWorkbook(new FileInputStream(file));

		XSSFSheet sheet = workbook.getSheetAt(0);

		for (int row = 0; row <= sheet.getLastRowNum(); row++) {
			XSSFRow xssfRow = sheet.getRow(row);
			System.out.println("Row :" + row);
			// Starting cells

			Iterator<Cell> cellIterator = xssfRow.cellIterator();
			int cols = 0;
			Timeperiod timePeriod = null;
			Indicator indicator = null;
			IndicatorClassification icSector = null;
			IndicatorClassification icSubSector = null;
			IndicatorClassification source = null;
			Subgroup subgroup = null;
			IndicatorClassificationIndicatorUnitSubgroupMapping icius;
			Unit unit = null;

			IndicatorUnitSubgroup ius = null;
			String areaCode = null;
			String dataValue = null;

			Cell cell = null;
			while (cellIterator.hasNext()) {
				cell = cellIterator.next();
				switch (cols) {
				case 0:
					if (cell.getStringCellValue() == null || cell.getStringCellValue().isEmpty()) {
						return true;
					}
					timePeriod = timePeriodRepository.findByTimePeriod(cell.getStringCellValue().trim());
					try {
						if (timePeriod == null) {
						
							int month = Integer.parseInt(cell.getStringCellValue().split("\\.")[1]);
							int year = Integer.parseInt(cell.getStringCellValue().split("\\.")[0]);
							String monthString = "";
							if (month >= 10) {
								monthString = month + "";
							} else {
								monthString = "0" + month;
							}
							Year y = Year.of(year);
							Month m = Month.of(month);

							String dayString = "";
							if (m.length(y.isLeap()) < 10) {
								dayString = "0" + m.length(y.isLeap());
							} else {
								dayString = m.length(y.isLeap()) + "";
							}

							timePeriod = new Timeperiod();
							timePeriod.setPeriodicity(1);
							try {
								timePeriod.setStartDate(new SimpleDateFormat("yyyy-MM-dd").parse(year + "-" + monthString + "-01"));
							} catch (ParseException e) {
								// TODO Auto-generated catch block
								e.printStackTrace();
							}
							try {
								timePeriod.setEndDate(new SimpleDateFormat("yyyy-MM-dd").parse(year + "-" + monthString + "-" + dayString));
							} catch (ParseException e) {
								// TODO Auto-generated catch block
								e.printStackTrace();
							}
							timePeriod.setTimePeriod(cell.getStringCellValue());
							timePeriod = timePeriodRepository.save(timePeriod);
						}
					} catch (Exception e) {
						// TODO Auto-generated catch block
						e.printStackTrace();
					}
					break;
				case 1:
					areaCode = cell.getStringCellValue().trim();
					break;
				case 3:
					icSector = indicatorClassificationRepository.findByNameAndParentIsNull(cell.getStringCellValue());
					break;
				case 4:
					icSubSector = indicatorClassificationRepository.findByNameAndParent(cell.getStringCellValue(), icSector);
					break;

				case 5:
					if (cell.getStringCellValue().isEmpty()) {
						System.out.println("Rows::" + sheet.getLastRowNum());
						System.out.println("Indicator Name is Empty");
						return true;
					}
					System.out.println("Indicator Name :"+cell.getStringCellValue());
//					indicator = indicatorRepository.findByIndicatorNameAndAgencyAgencyId(cell.getStringCellValue(), agencyId);
					if (indicator == null) {
						 indicator = new Indicator();
						 indicator.setHighIsGood(true);
						 indicator.setIndicatorClassification(icSubSector);
						 indicator.setIndicatorMetadata(null);
						 indicator.setIndicatorName(cell.getStringCellValue());
						
						 indicator = indicatorRepository.save(indicator);

					}
					break;
				case 6:
					dataValue = cell.getStringCellValue();
					break;
				case 7:
					System.out.println("Unit Name :" + cell.getStringCellValue());
					unit = unitRepository.findByUnitName(cell.getStringCellValue());
					break;
				case 8:
					System.out.println("Subgroup::::fromexcel::::" + cell.getStringCellValue().trim());
					subgroup = subgroupRepository.findBySubgroupVal(cell.getStringCellValue().trim());
					break;
				case 9:
					source = indicatorClassificationRepository.findByNameAndParentIsNotNull(cell.getStringCellValue().trim());
					break;
				}

				cols++;

			}

			// start persisting

			ius = new IndicatorUnitSubgroup();
			ius.setIndicator(indicator);
			ius.setSubgroup(subgroup);
			ius.setUnit(unit);
			
			if (indicatorUnitSubgroupRepository.findByIndicatorAndUnitAndSubgroup(indicator, unit, subgroup) == null)
				ius = indicatorUnitSubgroupRepository.save(ius);
			else
				ius = indicatorUnitSubgroupRepository.findByIndicatorAndUnitAndSubgroup(indicator, unit, subgroup);

			icius = new IndicatorClassificationIndicatorUnitSubgroupMapping();
			icius.setIndicatorClassification(icSubSector);
			icius.setIndicatorUnitSubgroup(ius);

			if (indicatorClassification_Ius_Mapping_Repository.findByIndicatorClassificationAndIndicatorUnitSubgroup(icSubSector, ius) == null)
				icius = indicatorClassification_Ius_Mapping_Repository.save(icius);
			else
				icius = indicatorClassification_Ius_Mapping_Repository.findByIndicatorClassificationAndIndicatorUnitSubgroup(icSubSector, ius);

			Data data = new Data();

			Area area = areaRepository.findByAreaCode(areaCode);

			data.setArea(area);
			data.setIndicator(indicator);
			data.setIndicatorUnitSubgroup(ius);
			data.setPercentage(new Double(dataValue));
			data.setSource(source);
			data.setSubgroup(subgroup);
			data.setTimePeriod(timePeriod);
			data.setUnit(unit);

			dataEntryRepository.save(data);
			System.out.println("Row completed :::"+row);
		}
		return true;
	}

}
