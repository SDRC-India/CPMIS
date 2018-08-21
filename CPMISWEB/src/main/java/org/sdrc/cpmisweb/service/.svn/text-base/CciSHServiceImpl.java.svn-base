/**
 * 
 */
package org.sdrc.cpmisweb.service;

import java.util.ArrayList;
import java.util.List;

import org.dozer.DozerBeanMapper;
import org.sdrc.cpmisweb.domain.CciSH;
import org.sdrc.cpmisweb.domain.CciSHTraining;
import org.sdrc.cpmisweb.domain.Timeperiod;
import org.sdrc.cpmisweb.model.CciSHModel;
import org.sdrc.cpmisweb.repository.CciSHRepository;
import org.sdrc.cpmisweb.repository.CciSHTrainingRepository;
import org.sdrc.cpmisweb.repository.TimePeriodRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

/**
 * @author Pratyush(pratyush@sdrc.co.in) created on : 08-Mar-2018 5:29:52 pm
 */
@Service
public class CciSHServiceImpl implements CciSHService {

	@Autowired
	CciSHRepository cciHomeRepository;
	@Autowired
	CciSHTrainingRepository cciHomeTrainingRepository;
	@Autowired
	DozerBeanMapper mapper;
	@Autowired
	TimePeriodRepository timePeriodRepository;

	@Override
	public void save(CciSHModel cciHomeModel) {
		CciSH cciHome = mapper.map(cciHomeModel, CciSH.class);
		CciSH home  = cciHomeRepository.save(cciHome);
		
		List<CciSHTraining> cciHomeTraining1 = cciHome.getCciHomeTrainings();
		List<Integer> remainingIds = new ArrayList<Integer>();
		
		for(CciSHTraining homeTraining : cciHomeTraining1){
			homeTraining.setHomeId(home);
		}
		cciHomeTrainingRepository.save(cciHomeTraining1);
		for(CciSHTraining hTraining : cciHomeTraining1){
			remainingIds.add(hTraining.getTrainingId());
		}
		//the following method call will delete the records from training table which were deleted by user.
		cciHomeTrainingRepository.deleteByTrainingIdNotInAndHomeIdId(remainingIds, home.getId());
	}
	
	@Override
	public CciSHModel findLastSavedData(Integer userId) {
		
		CciSHModel model = new CciSHModel();
		Timeperiod latestTimePeriod = timePeriodRepository.findTopByPeriodicityOrderByTimeperiodIdDesc(1);
		Integer timePeriodId = cciHomeRepository.findMaxTimePeriod(userId);
		if(timePeriodId == null){//1st login(not saved or submitted)
			model.setTimeperiod(timePeriodRepository.findTopByPeriodicityOrderByTimeperiodIdAsc(1));
			model.setUserId(userId);
			return model;
		}else{//either saved or submitted
			Timeperiod userMaxTimePeriod = timePeriodRepository.findByTimeperiodId(cciHomeRepository.findMaxTimePeriod(userId));
			CciSH cciHome = cciHomeRepository.findByUserIdAndTimeperiodTimeperiodId(userId,userMaxTimePeriod.getTimeperiodId());
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
	
	private CciSHModel getData(CciSH cciHome){
		CciSHModel model = new CciSHModel();
		model = mapper.map(cciHome, CciSHModel.class);
		model.getCciHomeTrainings().sort((ctds1, ctds2) -> ctds1.getTrainingId().compareTo(ctds2.getTrainingId()));
		for(CciSHTraining homeTraining : model.getCciHomeTrainings()){
			homeTraining.setHomeId(null);
		}
		return model;
	}
	
	private CciSHModel getSubmittedData(CciSH lmcciHome, Timeperiod userMaxTimePeriod){
		CciSHModel model = new CciSHModel();
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
