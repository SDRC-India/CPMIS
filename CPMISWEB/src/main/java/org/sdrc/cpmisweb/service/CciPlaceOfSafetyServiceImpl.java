package org.sdrc.cpmisweb.service;

import java.util.ArrayList;
import java.util.List;

import org.dozer.DozerBeanMapper;
import org.sdrc.cpmisweb.domain.CciPlaceOfSafety;
import org.sdrc.cpmisweb.domain.CciPlaceOfSafetyTraining;
import org.sdrc.cpmisweb.domain.Timeperiod;
import org.sdrc.cpmisweb.model.CciPlaceOfSafetyModel;
import org.sdrc.cpmisweb.repository.CciPlaceOfSafetyRepository;
import org.sdrc.cpmisweb.repository.CciPlaceOfSafetyTrainingRepository;
import org.sdrc.cpmisweb.repository.TimePeriodRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
@Service
public class CciPlaceOfSafetyServiceImpl implements CciPlaceOfSafetyService {

	@Autowired
	CciPlaceOfSafetyRepository cciPlaceOfSafetyRepository;
	@Autowired
	CciPlaceOfSafetyTrainingRepository cciPlaceOfSafetyTrainingRepository;
	@Autowired
	DozerBeanMapper mapper;
	@Autowired
	TimePeriodRepository timePeriodRepository;

	@Override
	public void save(CciPlaceOfSafetyModel cciPlaceOfSafetyModel) {

		CciPlaceOfSafety cciPlaceOfSafety = mapper.map(cciPlaceOfSafetyModel, CciPlaceOfSafety.class);
		CciPlaceOfSafety placeOfSafety = cciPlaceOfSafetyRepository.save(cciPlaceOfSafety);
		
		List<CciPlaceOfSafetyTraining> cciPlaceOfSafetyTraining1 = cciPlaceOfSafety.getCciPlaceOfSafetyTrainings();
		List<Integer> remainingIds = new ArrayList<Integer>();
		
		for(CciPlaceOfSafetyTraining posTraining : cciPlaceOfSafetyTraining1){
			posTraining.setPosId(placeOfSafety);
		}
		cciPlaceOfSafetyTrainingRepository.save(cciPlaceOfSafetyTraining1);
		for(CciPlaceOfSafetyTraining posTraining1 : cciPlaceOfSafetyTraining1){
			remainingIds.add(posTraining1.getTrainingId());
		}
		//the following method call will delete the records from training table which were deleted by user.
		cciPlaceOfSafetyTrainingRepository.deleteByTrainingId(remainingIds, placeOfSafety.getId());
	}

	@Override
	public CciPlaceOfSafetyModel findLastSavedData(Integer userId) {
		
		CciPlaceOfSafetyModel model = new CciPlaceOfSafetyModel();
		Timeperiod latestTimePeriod = timePeriodRepository.findTopByPeriodicityOrderByTimeperiodIdDesc(1);
		Integer timePeriodId = cciPlaceOfSafetyRepository.findMaxTimePeriod(userId);
		if(timePeriodId == null){//1st login(not saved or submitted)
			model.setTimeperiod(timePeriodRepository.findTopByPeriodicityOrderByTimeperiodIdAsc(1));
			model.setUserId(userId);
			return model;
		}else{//either saved or submitted
			Timeperiod userMaxTimePeriod = timePeriodRepository.findByTimeperiodId(cciPlaceOfSafetyRepository.findMaxTimePeriod(userId));
			CciPlaceOfSafety cciPlaceOfSafety = cciPlaceOfSafetyRepository.findByUserIdAndTimeperiodTimeperiodId(userId,userMaxTimePeriod.getTimeperiodId());
			if(userMaxTimePeriod.getTimeperiodId() < latestTimePeriod.getTimeperiodId()){//past months data entry
				if(cciPlaceOfSafety.isSubmitted()){//if submitted(code for next time period data entry)
					return getSubmittedData(cciPlaceOfSafety, userMaxTimePeriod);
				}else{//if saved(show saved data)
					return getData(cciPlaceOfSafety);
				}
			}else{//code for current month submitted form
				return getData(cciPlaceOfSafety);
			}
		}
		
	}
	
	private CciPlaceOfSafetyModel getData(CciPlaceOfSafety cciPlaceOfSafety){
		CciPlaceOfSafetyModel model = new CciPlaceOfSafetyModel();
		model = mapper.map(cciPlaceOfSafety, CciPlaceOfSafetyModel.class);
		model.getCciPlaceOfSafetyTrainings().sort((ctds1, ctds2) -> ctds1.getTrainingId().compareTo(ctds2.getTrainingId()));
		for(CciPlaceOfSafetyTraining posTraining : model.getCciPlaceOfSafetyTrainings()){
			posTraining.setPosId(null);
		}
		return model;
	}
	
	private CciPlaceOfSafetyModel getSubmittedData(CciPlaceOfSafety lmcciPlaceOfSafety, Timeperiod userMaxTimePeriod){
		CciPlaceOfSafetyModel model = new CciPlaceOfSafetyModel();
		if(null != lmcciPlaceOfSafety){
			model.setaYears16to18(lmcciPlaceOfSafety.getE1Years16to18());
			model.setaYears18to21(lmcciPlaceOfSafety.getE1Years18to21());
			model.setaYearsGreaterThan21(lmcciPlaceOfSafety.getE1YearsGreaterThan21());
			model.setaTotal(lmcciPlaceOfSafety.getE1Total());
			model.setTimeperiod(timePeriodRepository.findNextTimeperiodOfGivenId(userMaxTimePeriod.getTimeperiodId()));
			model.setSubmitted(false);
		}
		return model;
	}

}
