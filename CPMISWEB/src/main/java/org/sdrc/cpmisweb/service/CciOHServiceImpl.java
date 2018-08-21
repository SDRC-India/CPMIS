package org.sdrc.cpmisweb.service;

import java.util.ArrayList;
import java.util.List;

import org.dozer.DozerBeanMapper;
import org.sdrc.cpmisweb.domain.CciOH;
import org.sdrc.cpmisweb.domain.CciOHTraining;
import org.sdrc.cpmisweb.domain.Timeperiod;
import org.sdrc.cpmisweb.model.CciOHModel;
import org.sdrc.cpmisweb.repository.CciOHRepository;
import org.sdrc.cpmisweb.repository.CciOHTrainingRepository;
import org.sdrc.cpmisweb.repository.TimePeriodRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
/**
 * @author Pratyush Kumar Rath(pratyush@sdrc.co.in)
 */
@Service
public class CciOHServiceImpl implements CciOHService {

	@Autowired
	CciOHRepository cciHomeRepository;
	@Autowired
	CciOHTrainingRepository cciHomeTrainingRepository;
	@Autowired
	DozerBeanMapper mapper;
	@Autowired
	TimePeriodRepository timePeriodRepository;

	@Override
	public void save(CciOHModel cciHomeModel) {
		CciOH cciHome = mapper.map(cciHomeModel, CciOH.class);
		CciOH home  = cciHomeRepository.save(cciHome);
		
		List<CciOHTraining> cciHomeTraining1 = cciHome.getCciHomeTrainings();
		List<Integer> remainingIds = new ArrayList<Integer>();
		
		for(CciOHTraining homeTraining : cciHomeTraining1){
			homeTraining.setHomeId(home);
		}
		cciHomeTrainingRepository.save(cciHomeTraining1);
		for(CciOHTraining hTraining : cciHomeTraining1){
			remainingIds.add(hTraining.getTrainingId());
		}
		//the following method call will delete the records from training table which were deleted by user.
		cciHomeTrainingRepository.deleteByTrainingIdNotInAndHomeIdId(remainingIds, home.getId());
	}
	
	@Override
	public CciOHModel findLastSavedData(Integer userId) {
		CciOHModel model = new CciOHModel();
		Timeperiod latestTimePeriod = timePeriodRepository.findTopByPeriodicityOrderByTimeperiodIdDesc(1);
		Integer timePeriodId = cciHomeRepository.findMaxTimePeriod(userId);
		if(timePeriodId == null){//1st login(not saved or submitted)
			model.setTimeperiod(timePeriodRepository.findTopByPeriodicityOrderByTimeperiodIdAsc(1));
			model.setUserId(userId);
			return model;
		}else{//either saved or submitted
			Timeperiod userMaxTimePeriod = timePeriodRepository.findByTimeperiodId(cciHomeRepository.findMaxTimePeriod(userId));
			CciOH cciHome = cciHomeRepository.findByUserIdAndTimeperiodTimeperiodId(userId,userMaxTimePeriod.getTimeperiodId());
			if(userMaxTimePeriod.getTimeperiodId() < latestTimePeriod.getTimeperiodId()){//past months data entry
				if(cciHome.isSubmitted()){//if submitted(code for next time period data entry)
					return getSubmittedData(cciHome, userMaxTimePeriod);
				}else{//if saved(show saved data)
					return getData(cciHome);
				}
			}else{//code for current month submitted form
				return getData(cciHome);
			}
		}
	}
	
	private CciOHModel getData(CciOH cciHome){
		CciOHModel model = new CciOHModel();
		model = mapper.map(cciHome, CciOHModel.class);
		model.getCciHomeTrainings().sort((ctds1, ctds2) -> ctds1.getTrainingId().compareTo(ctds2.getTrainingId()));
		for(CciOHTraining homeTraining : model.getCciHomeTrainings()){
			homeTraining.setHomeId(null);
		}
		return model;
	}
	
	private CciOHModel getSubmittedData(CciOH lmcciHome, Timeperiod userMaxTimePeriod){
		CciOHModel model = new CciOHModel();
		if(null != lmcciHome){
			model.setaYears7to11(lmcciHome.getE1Years7to11());
			model.setaYears12to15(lmcciHome.getE1Years12to15());
			model.setaYears16to18(lmcciHome.getE1Years16to18());
			model.setaYearsGreaterThan18(lmcciHome.getE1YearsGreaterThan18());
			model.setaTotal(lmcciHome.getE1Total());
			model.setTimeperiod(timePeriodRepository.findNextTimeperiodOfGivenId(userMaxTimePeriod.getTimeperiodId()));
		}
		return model;
	}

}
