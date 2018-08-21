package org.sdrc.cpmisweb.service;

import java.util.ArrayList;
import java.util.List;

import org.dozer.DozerBeanMapper;
import org.sdrc.cpmisweb.domain.CciChildrenHome;
import org.sdrc.cpmisweb.domain.CciChildrenHomeTraining;
import org.sdrc.cpmisweb.domain.Timeperiod;
import org.sdrc.cpmisweb.model.CciChildrenHomeModel;
import org.sdrc.cpmisweb.repository.CciChildrenHomeRepository;
import org.sdrc.cpmisweb.repository.CciChildrenHomeTrainingRepository;
import org.sdrc.cpmisweb.repository.TimePeriodRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
@Service
public class CciChildrenHomeServiceImpl implements CciChildrenHomeService {

	@Autowired
	CciChildrenHomeRepository cciChildrenHomeRepository;
	@Autowired
	CciChildrenHomeTrainingRepository cciChildrenHomeTrainingRepository;
	@Autowired
	DozerBeanMapper mapper;
	@Autowired
	TimePeriodRepository timePeriodRepository;

	@Override
	public void save(CciChildrenHomeModel cciChildrenHomeModel) {
		CciChildrenHome cciChildrenHome = mapper.map(cciChildrenHomeModel, CciChildrenHome.class);
		CciChildrenHome childrenHome = cciChildrenHomeRepository.save(cciChildrenHome);
		
		List<CciChildrenHomeTraining> cciChildrenHomeTraining = cciChildrenHome.getCciChildrenHomeTrainings();
		List<Integer> remainingIds = new ArrayList<Integer>();
		
		for(CciChildrenHomeTraining chTraining : cciChildrenHomeTraining){
			chTraining.setChId(childrenHome);
		}
		cciChildrenHomeTrainingRepository.save(cciChildrenHomeTraining);
		for(CciChildrenHomeTraining chTraining : cciChildrenHomeTraining){
			remainingIds.add(chTraining.getTrainingId());
		}
		//the following method call will delete the records from training table which were deleted by user.
		cciChildrenHomeTrainingRepository.deleteByTrainingId(remainingIds, childrenHome.getId());
	}
	
	@Override
	public CciChildrenHomeModel findLastSavedData(Integer userId) {
		
		CciChildrenHomeModel model = new CciChildrenHomeModel();
		Timeperiod latestTimePeriod = timePeriodRepository.findTopByPeriodicityOrderByTimeperiodIdDesc(1);
		Integer timePeriodId = cciChildrenHomeRepository.findMaxTimePeriod(userId);
		if(timePeriodId == null){//1st login(not saved or submitted)
			model.setTimeperiod(timePeriodRepository.findTopByPeriodicityOrderByTimeperiodIdAsc(1));
			model.setUserId(userId);
			return model;
		}else{//either saved or submitted
			Timeperiod userMaxTimePeriod = timePeriodRepository.findByTimeperiodId(cciChildrenHomeRepository.findMaxTimePeriod(userId));
			CciChildrenHome cciChildrenHome = cciChildrenHomeRepository.findByUserIdAndTimeperiodTimeperiodId(userId,userMaxTimePeriod.getTimeperiodId());
			if(userMaxTimePeriod.getTimeperiodId() < latestTimePeriod.getTimeperiodId()){//past months data entry
				if(cciChildrenHome.isSubmitted()){//if submitted(code for next time period data entry)
					return getSubmittedData(cciChildrenHome, userMaxTimePeriod);
				}else{//if saved(show saved data)
					return getData(cciChildrenHome);
				}
			}else{//code for current month submitted form
				return getData(cciChildrenHome);
			}
		}
		
	}
	
	private CciChildrenHomeModel getData(CciChildrenHome cciChildrenHome){
		CciChildrenHomeModel model = new CciChildrenHomeModel();
		model = mapper.map(cciChildrenHome, CciChildrenHomeModel.class);
		model.getCciChildrenHomeTrainings().sort((ctds1, ctds2) -> ctds1.getTrainingId().compareTo(ctds2.getTrainingId()));
		for(CciChildrenHomeTraining chTraining : model.getCciChildrenHomeTrainings()){
			chTraining.setChId(null);
		}
		return model;
	}
	
	private CciChildrenHomeModel getSubmittedData(CciChildrenHome lmcciChildrenHome, Timeperiod userMaxTimePeriod){
		CciChildrenHomeModel model = new CciChildrenHomeModel();
		if(null != lmcciChildrenHome){
			model.setaYears0to6(lmcciChildrenHome.getE1Years0to6());
			model.setaYears7to11(lmcciChildrenHome.getE1Years7to11());
			model.setaYears12to15(lmcciChildrenHome.getE1Years12to15());
			model.setaYears16to18(lmcciChildrenHome.getE1Years16to18());
			model.setaYearsGreaterThan18(lmcciChildrenHome.getE1YearsGreaterThan18());
			model.setaTotal(lmcciChildrenHome.getE1Total());
			model.setTimeperiod(timePeriodRepository.findNextTimeperiodOfGivenId(userMaxTimePeriod.getTimeperiodId()));
			model.setSubmitted(false);
		}
		return model;
	}

}
