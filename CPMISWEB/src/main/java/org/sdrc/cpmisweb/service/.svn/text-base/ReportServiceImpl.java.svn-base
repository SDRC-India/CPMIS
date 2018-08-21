package org.sdrc.cpmisweb.service;

import java.util.ArrayList;
import java.util.List;

import org.json.simple.JSONArray;
import org.json.simple.JSONObject;
import org.sdrc.core.IndicatorClassificationType;
import org.sdrc.cpmisweb.domain.Indicator;
import org.sdrc.cpmisweb.domain.IndicatorClassification;
import org.sdrc.cpmisweb.domain.Timeperiod;
import org.sdrc.cpmisweb.model.UserModel;
import org.sdrc.cpmisweb.model.ValueObject;
import org.sdrc.cpmisweb.repository.IndicatorClassificationRepository;
import org.sdrc.cpmisweb.repository.IndicatorRepository;
import org.sdrc.cpmisweb.repository.TimePeriodRepository;
import org.sdrc.cpmisweb.util.Constant;
import org.sdrc.cpmisweb.util.StateManager;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

/**
 * @author Pratyush(pratyush@sdrc.co.in) created on : 15-Mar-2018 6:39:02 pm
 */
@Service
public class ReportServiceImpl implements ReportService{

	@Autowired
	IndicatorClassificationRepository indicatorClassificationRepository;
	
	@Autowired
	IndicatorRepository indicatorRepository;
	
	@Autowired
	TimePeriodRepository timePeriodRepository;
	
	@Autowired
	private StateManager stateManager;
	
	@SuppressWarnings("unchecked")
	@Override
	public JSONArray fetchAllSectors() {
		UserModel user = (UserModel) stateManager.getValue(Constant.USER_PRINCIPAL);
		List<IndicatorClassification> indicatorClassifications = indicatorClassificationRepository.findByIndicatorClassificationType(IndicatorClassificationType.SC);
		
		if(!user.getSjpuAccess())
			indicatorClassifications = indicatorClassificationRepository.findByIndicatorClassificationTypeAndNameNotLike(IndicatorClassificationType.SC, "%(SJPU%");
		
		JSONArray allSectorArr = new JSONArray();
		for (IndicatorClassification indicatorClassification : indicatorClassifications) {
			JSONObject sectorObj = new JSONObject();
			if (null == indicatorClassification.getParent()) {
				sectorObj.put("key", indicatorClassification.getIndicatorClassificationId());
				sectorObj.put("value", indicatorClassification.getName());
				sectorObj.put("description", -1);
			} else {
				sectorObj.put("key", indicatorClassification.getIndicatorClassificationId());
				sectorObj.put("value", indicatorClassification.getName());
				sectorObj.put("description", indicatorClassification.getParent().getIndicatorClassificationId());
			}
			allSectorArr.add(sectorObj);
		}
		return allSectorArr;
	}

	@Override
	@Transactional
	public List<ValueObject> fetchIndicatorsForReport(String sector) {
		IndicatorClassification sectorIC = new IndicatorClassification();
		sectorIC.setIndicatorClassificationId(new Integer(sector));

		List<Object[]> listofIndicators = indicatorRepository.findByIndicatorClassification(sectorIC);

		List<ValueObject> list = new ArrayList<ValueObject>();

		for (int i = 0; i < listofIndicators.size(); i++) {
			Object obj = listofIndicators.get(i);

			ValueObject vObject = new ValueObject();
			String indName = "";
			Indicator indicator = (Indicator) obj;
			indName = indicator.getIndicatorName();
			vObject.setKey(Integer.toString(indicator.getIndicatorId()));
			vObject.setValue(indName);
			list.add(vObject);
		}
		return list;
	}
	
	@Override
	public List<ValueObject> fetchTimeperiodForReport() {
		List<Timeperiod> utTimeperiods = null;
		List<ValueObject> valueObjects = new ArrayList<>();

		utTimeperiods = timePeriodRepository.findAllByOrderByTimeperiodIdDesc();

		for (Timeperiod utTimeperiod : utTimeperiods) {
			ValueObject object = new ValueObject();
			object.setKey(utTimeperiod.getTimeperiodId().toString());
			object.setValue(utTimeperiod.getTimePeriod());
			object.setGroupName(utTimeperiod.getPeriodicity()==1?"month":"quarter");
			valueObjects.add(object);
		}

		return valueObjects;
	}
}
